<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ArticleController::class, 'getHome'])->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/about/home', function () {
    return view('about.home');
})->name('about.home');
Route::get('/about/history', function () {
    return view('about.history');
})->name('about.history');
Route::get('/about', function () {
    return view('about.index');
})->name('about.index');


Route::get('/documents/hartiyazemli/', function () {
    return view('documents.hartiyazemli');
})->name('documents.hartiyazemli');

Route::get('/documents/history/', function () {
    return view('documents.history');
})->name('documents.history');


Route::get('/awards/rodnik/', function () {
    return view('awards.rodnik');
})->name('awards.rodnik');

Route::get('/awards/', function () {
    return view('awards.index');
})->name('awards.index');


Route::get('/content/{category:alias}', [ArticleController::class, 'getCategory'])->name('article.category.get');

Route::get('/articles/{article}', [ArticleController::class, 'getArticle'])->name('article.get');
