<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/single-blog', function () {
    return view('pages.single-blog');
})->name('single-blog');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');