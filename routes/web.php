<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/about/home', function () {
    return view('about.home');
});
Route::get('/about/history', function () {
    return view('about.history');
});
Route::get('/about', function () {
    return view('about.index');
});


Route::get('/documents/hartiyazemli/', function () {
    return view('documents.hartiyazemli');
});
