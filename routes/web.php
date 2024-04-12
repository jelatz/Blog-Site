<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Blog\BlogController;



Route::get('/', [HomeController::class, 'index'] )->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [BlogController::class, 'index'])->name('dashboard');
    Route::get('/profile', function () {
        return view('auth.profile'); })->name('profile');
});

require __DIR__.'/auth.php';
