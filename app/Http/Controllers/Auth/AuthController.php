<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
                'password' => 'required|confirmed|min:8'
            ]
        );

        $user = User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]
        );

        event(new Registered($user));

        return redirect()->route('verification.notice')->with('success', 'Registration successful! Please verify your email address.');
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
        if (auth()->attempt($credentials)) {
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

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'logged out successfully');
    }
}
