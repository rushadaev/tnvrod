<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
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
}
