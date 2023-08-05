<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Page;
use App\Models\Section;

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
    $body = Page::where('slug', '/home/slug')->first();
    $output = Blade::render(str_replace(
        '\=\&gt;', '=>', $body->body
    ));
    return $output;
    return view('about.home');
})->name('about.home');
Route::get('/about/report', function () {
    $body = Page::where('slug', '/about/report')->first();
    $output = Blade::render(str_replace(
        '\=\&gt;', '=>', $body->body
    ));
    return $output;
    return view('about.report');
})->name('about.report');
Route::get('/about/anthem', function () {
    $body = Page::where('slug', '/about/anthem')->first();
    $output = Blade::render(str_replace(
        '\=\&gt;', '=>', $body->body
    ));
    return $output;
    return view('about.anthem');
})->name('about.anthem');
Route::get('/about/history', function () {
    return view('about.history');
})->name('about.history');

Route::get('/about', function () {
    $body = Section::where('slug', '/about')->first();
    $output = Blade::render(str_replace(
        '\=\&gt;', '=>', $body->body
    ));
    return $output;
    return view (['template' => $output], ['body' => $body]);
})->name('about.index');


Route::get('/structure/participants', function () {
    $body = Page::where('slug', '/structure/participants')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.participants');
Route::get('/structure/deputy', function () {
    $body = Page::where('slug', '/structure/deputy')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.deputy');
Route::get('/structure/zonal', function () {
    $body = Page::where('slug', '/structure/zonal')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.zonal');
Route::get('/structure/chairman', function () {
    $body = Page::where('slug', '/structure/chairman')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.chairman');
Route::get('/structure/deputy-group', function () {
    $body = Page::where('slug', '/structure/deputy-group')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.deputy-group');
Route::get('/structure/executive', function () {
    $body = Page::where('slug', '/structure/executive')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.executive');
Route::get('/structure/presidium', function () {
    $body = Page::where('slug', '/structure/presidium')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.presidium');
Route::get('/structure/council', function () {
    $body = Page::where('slug', '/structure/council')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.council');

Route::get('/structure/youth-leaders', function () {
    $body = Page::where('slug', '/structure/youth-leaders')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.youth-leaders');
Route::get('/structure', function () {
    $body = Section::where('slug', '/structure')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('structure.index');


Route::get('/youth', function () {
    $body = Page::where('slug', '/youth')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('youth.index');

Route::get('/media', function () {
    $body = Section::where('slug', '/media')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('media.index');

Route::get('/grants', function () {
    $body = Section::where('slug', '/grants')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('grants.index');

Route::get('/publications/materials', function () {
    $body = Page::where('slug', '/materials')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('publications.materials');
Route::get('/publications/career', function () {
    $body = Page::where('slug', '/career')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('publications.career');
Route::get('/publications/lectures', function () {
    $body = Page::where('slug', '/lectures')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('publications.lectures');

Route::get('/publications', function () {
    $body = Section::where('slug', '/publications')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('publications.index');

Route::get('/documents/nonprofit', function () {
    $body = Page::where('slug', '/nonprofit')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('documents.nonprofit');
Route::get('/documents/declaration', function () {
    $body = Page::where('slug', '/declaration')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('documents.declaration');
Route::get('/documents/program', function () {
    $body = Page::where('slug', '/program')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('documents.program');
Route::get('/documents/terms', function () {
    $body = Page::where('slug', '/terms')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('documents.terms');
Route::get('/documents/hartiyazemli/', function () {
    $body = Page::where('slug', '/hartiyazemli')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('documents.hartiyazemli');
Route::get('/documents/history/', function () {
    $body = Page::where('slug', '/history')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('documents.history');
Route::get('/documents/', function () {
    $body = Section::where('slug', '/documents')->first();
    $output = Blade::render(str_replace(
        '=&gt;', '=>', $body->body
    ));
    return $output;
})->name('documents.index');


Route::get('/awards/rodnik/', function () {
    return view('awards.rodnik');
})->name('awards.rodnik');

Route::get('/awards/', function () {
    return view('awards.index');
})->name('awards.index');


Route::get('/content/{category:alias}', [ArticleController::class, 'getCategory'])->name('article.category.get');

Route::get('/articles/{article}', [ArticleController::class, 'getArticle'])->name('article.get');
