<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        if(auth()->check()){
            return redirect()->route('dashboard');
        }

        $blogs = Blog::latest()->paginate(6);
        return view('home', ['blogs' => $blogs]);
    }
}
