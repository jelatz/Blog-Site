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
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

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
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }
    // LOGIN AUTHENTICATION
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'You are successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }
    // FORGOT PASSWORD PAGE
    function forgotPassword()
    {
        return view('auth.forgot-password');
    }
    // RESET PASSWORD
    function resetPassword()
    {

    }
    // LOGOUT
    public function logout(Request $request)
    {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login')->with('success', 'Logged out successfully');
    }
    public function postLogout()
    {
        return redirect()->route('dashboard');
    }
}
