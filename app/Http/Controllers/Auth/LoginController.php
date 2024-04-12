<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    // LOGIN AUTHENTICATION
    public function authenticate()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'You are successfully logged in!');
        }

        if (!User::where('email', $credentials['email'])->exists()) {
            return redirect()->route('login')->withErrors(['email' => 'Email not registered!'])->withInput();
        }

        return back()->withErrors([
            'password' => 'Incorrect password!',
        ])->withInput();
    }
}
