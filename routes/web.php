<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Blog\BlogController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // PROFILE ROUTES
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile');
        Route::put('/profile', 'update')->name('profile.update');
        Route::post('/profile/destroy', 'destroy')->name('profile.destroy');
    });
    // BLOG ROUTES
    Route::controller(BlogController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('blog', 'showAll')->name('blog');
        Route::get('/blog/create', 'create')->name('blog.create');
        Route::post('/blog/store', 'store')->name('blog.store');
    });
});

require __DIR__ . '/auth.php';
