<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return 'index';
    }

    public function create(){
        return 'create';
    }

    public function show(){
        return 'show';
    }

    public function edit(){
        return 'edit';
    }
}
