<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;


class AuthController extends Controller
{
    // LINK TO REGISTER PAGE
    public function register()
    {
        return view('auth.register');
    }
    // STORE NEW USER
    public function store()
    {
        //validate
        //create the user
        //login
        //redirect
        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed'
            ]
        );

        $user = User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]
        );

        Auth::login($user);

        event(new Registered($user));

        return redirect()->route('verification.notice')->with('success', 'Registration successful! Please verify your email address. Check your email for the verification link.');
    }

    // LINK TO LOGIN PAGE
    public function login()
    {
        return view('auth.login');
    }
    // LOGIN AUTHENTICATION
    public function authenticate()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        $user = User::where('email', $credentials['email'])->first();
        
        if (!$user) {
            return back()->withErrors(['email' => 'Email not registered!'])->withInput();
        }
        if (auth()->attempt($credentials, request()->filled('remember'))) {
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'You are successfully logged in!');
        }
        return back()->withErrors(['password' => 'Incorrect Password!'])->withInput();
    }

    function forgotPassword(){
        return view('auth.forgot-password');
    }

    function resetPassword(){
        
    }
    
    

    public function logout()
    {
        auth()->logout();

        if (Auth::viaRemember()) {
            request()->session()->regenerate();
        } else {
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        }

        return redirect()->route('login')->with('success', 'logged out successfully');
    }
}
