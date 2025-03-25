<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/home');

Route::middleware('auth')->group(function () {
    Route::get('/home', [UserController::class, 'home'])->name('home');
    Route::get('/services', [UserController::class, 'services'])->name('services');

    Route::view('/home/handyman', 'home_handyman')->name('home.handyman');
    Route::view('/home/client', 'home_client')->name('home.client');

    Route::view('/welcome', 'welcome')->name('welcome');

    Route::view('/choose/industry', 'profile.choose_industry')->name('choose.industry');
    Route::put('/choose/industry', [UserController::class, 'choose_industry'])->name('choose.put.industry');

    Route::view('/choose/speciality', 'profile.choose_speciality')->name('choose.speciality');
    Route::put('/choose/speciality', [UserController::class, 'choose_speciality'])->name('choose.put.speciality');

    Route::view('/choose/done', 'profile.choose_done')->name('choose.done');
    Route::view('/dashboard/handyman', 'dashboard_handyman')->name('dashboard.handyman');

    // Resources
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('bookings', BookingController::class);
});

Route::get('/testing', function () {
    dd(auth()->check() && auth()->user()?->is_handyman());
});
