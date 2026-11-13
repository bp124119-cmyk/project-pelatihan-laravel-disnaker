<?php

use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingpageController::class)->group(function () {
    Route::get('/', 'landingpage')->name('landingpage');
    Route::get('/article', 'article')->name('article');    
    
    // Perbaikan: name('about') diubah menjadi name('aboutus')
    Route::get('/about', 'aboutus')->name('aboutus');    
    
    Route::get('/service', 'service')->name('service');
});