<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Section;
use Blade;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getSectionSlugged(Section $section, Request $request){

        $render_ready = str_replace(
            '\=\&gt;', '=>', $section->body,
        );
        $render_ready = str_replace('=&gt;', '=>', $render_ready);
        $output = Blade::render($render_ready,
            ['section' => $section]);
        return $output;
    }
    public function getPageSlugged(Section $section, Page $page, Request $request){
        //Проверяет есть ли шаблон или нет
        if(str_replace('<p><br></p>', '', $page->body)) {
            $render_ready = str_replace(
                '\=\&gt;', '=>', $page->body,
            );
            $render_ready = str_replace('=&gt;', '=>', $render_ready);
            $output = Blade::render($render_ready,
                ['page' => $page]);
            return $output;
        }
        else{
            return view('layouts.page', ['page' => $page]);
        }
    }
    public function getPageSluggedNoCategory(Page $page, Request $request){
        $render_ready = str_replace(
            '\=\&gt;', '=>', $page->body,
        );
        $render_ready = str_replace('=&gt;', '=>', $render_ready);

        $output = Blade::render($render_ready,
            ['page' => $page]);
        return $output;
    }

    public function getArticle(Article $article){
        return view('articles.article', ['article' => $article]);
    }

    public function getPage(Page $page){
        return view('pages.page', ['article' => $page]);
    }

    public function getCategory(Category $category){
        return view('articles.index', ['category' => $category]);
    }

    public function getSections(Section $section){
        return view('pages.index', ['category' => $section]);
    }

    public function getHome(Request $request){
        $articles = Article::orderByDesc('publish_up')->limit(10)->get();
        $last_articles = Article::orderByDesc('publish_up')->where('featured', 1)->limit(4)->get();
        return view('welcome', ['articles' => $articles, 'last_articles'=> $last_articles]);

    }

    public function search(Request $request){

        $articles = Article::where('title', 'LIKE', '%'.$request->get('query').'%')->take(10)->orderByDesc('created')->get();

        return view('search', ['articles' => $articles]);
    }

    public function getNews(Request $request){
        $day = $request->day;
        $month = $request->month;
        $year = $request->year;
        $date = Carbon::create($year, $month, $day)->format('Y-m-d');
        $query = Article::orderByDesc('created');
        if($day && $month && $year){
            $articles = $query->whereDay('created', $day)->whereMonth('created', $month)->whereYear('created', $year)->paginate(10);
        }
        else{
            $articles = $query->paginate(10);
        }

        return view('news', ['articles' => $articles]);
    }
}
