<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;



Route::get('/', function () {
    return view('pages.home');
})->name('home');

Auth::routes([
    'verify' => true
]);

Route::get('/dashboard', function(){
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::get('/email/verify', function () { return view('auth.verify-email');})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');

Route::post('/forgot-password', [AuthController::class, 'resetPassword']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view ('auth.profile');
})->middleware(['auth', 'verified'])->name('profile');