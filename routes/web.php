<?php

use App\Http\Middleware\PreventBackHistory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Blog\BlogController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::middleware(['auth', 'verified', PreventBackHistory::class])->group(function () {
    // PROFILE ROUTES
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile');
        Route::put('/profile', 'update')->name('profile.update');
        Route::post('/profile/destroy', 'destroy')->name('profile.destroy');
    });
    // BLOG ROUTES
    Route::controller(BlogController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('/blog/create', 'create')->name('blog.create');
        Route::get('blog', 'showAll')->name('blog');
        Route::get('/blog/{blog}/edit', 'edit')->name('blog.edit');
        Route::delete('/blog/{blog}', 'destroy')->name('blog.delete');
        Route::post('/blog/store', 'store')->name('blog.store');
        Route::put('/blog/{blog}', 'update')->name('blog.update');
    });
});

require __DIR__ . '/auth.php';
