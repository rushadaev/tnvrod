<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticle(Article $article){
        return view('articles.article', ['article' => $article]);
    }

    public function getCategory(Category $category){
        return view('articles.index', ['category' => $category]);
    }

    public function getHome(Request $request){
        $articles = Article::orderByDesc('created')->limit(10)->get();
        return view('welcome', ['articles' => $articles]);

    }
}
