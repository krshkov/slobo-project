<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/home');

Route::middleware('auth')->group(function () {
    Route::view('/home', 'home')->name('home');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('bookings', BookingController::class);
});
