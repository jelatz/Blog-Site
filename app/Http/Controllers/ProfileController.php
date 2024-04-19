<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    
        return back()->compact($accept)->with('success', 'Profile updated successfully');

        if(!$validated){
            return back()->with('error', 'Profile update failed');
        }
    }

    public function destroy($id){
        if($id != auth()->user()->$id){
            abort(403, 'Unauthorized Action');
        }
        $id->delete();
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login')->with('success', 'Account deleted successfully');
    }

    
}
