<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/dashboard', function(){
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');

Route::post('/forgot-password', [AuthController::class, 'resetPassword']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view ('auth.profile');
})->name('profile');