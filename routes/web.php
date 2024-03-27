<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('blogs');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');
