<?php

use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingpageController::class)->group(function () {
    Route::get('/', 'landingpage')->name('landingpage');
    Route::get('/article', 'article')->name('article');
    Route::get('/article/{article}', 'articleDetail')->name('article.detail');
    Route::get('/about', 'aboutus')->name('aboutus');
    Route::get('/service', 'service')->name('service');
    Route::post('/review', 'storeReview')->name('review.store');
});