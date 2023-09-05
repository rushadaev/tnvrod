<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('article', 'ArticleCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('section', 'SectionCrudController');
    Route::crud('page', 'PageCrudController');
    Route::crud('file', 'FileCrudController');
    Route::crud('cardblock', 'CardblockCrudController');
    Route::crud('media', 'MediaCrudController');
    Route::crud('partner', 'PartnerCrudController');
}); // this should be the absolute last line of this file