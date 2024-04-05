<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

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

        return redirect()->route('dashboard')->with('success', 'User created successfully');
    }

    // LINK TO LOGIN PAGE
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // $user = auth()->attempt(['email', $credentials['email']]);
        
        // Check if the user exists with the given email
        $user = User::where('email', $credentials['email'])->first();
        
        if (!$user) {
            // If no user exists with the provided email, return with an email error
            return back()->withErrors(['email' => 'Email not registered!'])->withInput();
        }
        
        // Attempt to authenticate with the provided credentials
        if (auth()->attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'You are successfully logged in!');
        }
    
        // If authentication fails at this point, it means the password is incorrect.
        return back()->withErrors(['password' => 'Incorrect Password!'])->withInput();
    }
    
    

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'logged out successfully');
    }
}
