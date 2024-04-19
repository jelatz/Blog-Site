<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('pages.profile.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $accept = 'image/jpg, image/png, image/jpeg';
        $validated = $request->validate([
            'name' => 'string|max:60',
            'email' => 'email',
            'profileImage' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $user = auth()->user();

        if ($request->hasFile('profileImage')) {
            $imagePath = $request->file('profileImage')->store('profile', 'public');
            $user->image = $imagePath;
        }
        $user->save();

        return back()->with('success', 'Profile updated successfully');

        if (!$validated) {
            return back()->with('error', 'Profile update failed');
        }
    }


    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required'
        ]);
    
        $user = auth()->user();
    
        if (!Hash::check($validated['password'], $user->password)) {
            return back()->with([
                'modal' => 'account-deletion',
                'error' => 'Password incorrect' 
            ]);
        }
    
        $user->delete();
    
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('success', 'Account deleted successfully');
    }
    

    }
