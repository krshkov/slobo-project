<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/home');

Route::middleware('auth')->group(function () {
    Route::view('/home', 'home')->name('home');
    Route::view('/welcome', 'welcome')->name('welcome');

    Route::view('/choose/industry', 'profile.choose_industry')->name('choose.industry');
    Route::put('/choose/industry', function (Request $request) {
        $user = \App\Models\User::query()->findOrFail(auth()->id());

        try {
            $user?->update(['industry' => $request->industry]);

            return redirect(route('choose.speciality'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    })->name('choose.put.industry');

    Route::view('/choose/speciality', 'profile.choose_speciality')->name('choose.speciality');
    Route::put('/choose/speciality', function (Request $request) {
        $user = \App\Models\User::query()->findOrFail(auth()->id());

        $specialities = $request->speciality;
        if (is_array($specialities)) {
            $speciality = implode(',', $specialities);
        }

        try {
            if (isset($speciality)) {
                $user?->update(['speciality' => $speciality]);
            }

            return redirect(route('choose.done'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    })->name('choose.put.speciality');

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
