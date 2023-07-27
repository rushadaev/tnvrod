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
Route::get('/about/report', function () {
    return view('about.report');
})->name('about.report');
Route::get('/about/anthem', function () {
    return view('about.anthem');
})->name('about.anthem');
Route::get('/about/history', function () {
    return view('about.history');
})->name('about.history');
Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

Route::get('/structure/participants', function () {
    return view('structure.participants');
})->name('structure.participants');
Route::get('/structure/deputy', function () {
    return view('structure.deputy');
})->name('structure.deputy');
Route::get('/structure/zonal', function () {
    return view('structure.zonal');
})->name('structure.zonal');
Route::get('/structure/chairman', function () {
    return view('structure.chairman');
})->name('structure.chairman');
Route::get('/structure/deputy-group', function () {
    return view('structure.deputy-group');
})->name('structure.deputy-group');
Route::get('/structure/executive', function () {
    return view('structure.executive');
})->name('structure.executive');
Route::get('/structure/presidium', function () {
    return view('structure.presidium');
})->name('structure.presidium');
Route::get('/structure/council', function () {
    return view('structure.council');
})->name('structure.council');
Route::get('/structure/youth-leaders', function () {
    return view('structure.youth-leaders');
})->name('structure.youth-leaders');
Route::get('/structure', function () {
    return view('structure.index');
})->name('structure.index');


Route::get('/youth', function () {
    return view('youth.index');
})->name('youth.index');

Route::get('/media', function () {
    return view('media.index');
})->name('media.index');

Route::get('/grants', function () {
    return view('grants.index');
})->name('grants.index');

Route::get('/publications/materials', function () {
    return view('publications.materials');
})->name('publications.materials');
Route::get('/publications/career', function () {
    return view('publications.career');
})->name('publications.career');
Route::get('/publications/lectures', function () {
    return view('publications.lectures');
})->name('publications.lectures');

Route::get('/publications', function () {
    return view('publications.index');
})->name('publications.index');

Route::get('/documents/nonprofit', function () {
    return view('documents.nonprofit');
})->name('documents.nonprofit');
Route::get('/documents/declaration', function () {
    return view('documents.declaration');
})->name('documents.declaration');
Route::get('/documents/program', function () {
    return view('documents.program');
})->name('documents.program');
Route::get('/documents/terms', function () {
    return view('documents.terms');
})->name('documents.terms');
Route::get('/documents/hartiyazemli/', function () {
    return view('documents.hartiyazemli');
})->name('documents.hartiyazemli');
Route::get('/documents/history/', function () {
    return view('documents.history');
})->name('documents.history');
Route::get('/documents/', function () {
    return view('documents.index');
})->name('documents.index');


Route::get('/awards/rodnik/', function () {
    return view('awards.rodnik');
})->name('awards.rodnik');

Route::get('/awards/', function () {
    return view('awards.index');
})->name('awards.index');


Route::get('/content/{category:alias}', [ArticleController::class, 'getCategory'])->name('article.category.get');

Route::get('/articles/{article}', [ArticleController::class, 'getArticle'])->name('article.get');
