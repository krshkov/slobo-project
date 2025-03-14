<?php

use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/', '/home');
Route::view('/home', 'home')->middleware(['auth'])->name('home');
