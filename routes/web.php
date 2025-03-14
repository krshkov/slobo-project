<?php

use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/home');

Route::middleware('auth')->group(function () {
    Route::view('/home', 'home')->name('home');
    Route::resource('categories', 'CategoryController');
    Route::resource('subcategories', 'SubCategoryController');
});
