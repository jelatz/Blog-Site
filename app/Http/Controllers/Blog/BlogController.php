<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('dashboard', compact('blogs'));
    }

    public function showAll()
    {
        return view('pages.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog = new Blog();
        return view('pages.blog.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // Update the store method
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:150',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);
    
        $blog = new Blog();
        $blog->user_id = auth()->id();
        $blog->title = $validated['title'];
        $blog->content = $validated['content'];
    
        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('blog', 'public');
            $blog->logo = $imagePath;
        }
    
        $blog->save();
        return redirect()->route('blog.show', ['blog' => $blog->id])->with('success', 'Blog post created successfully!');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
