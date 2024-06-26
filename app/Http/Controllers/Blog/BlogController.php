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
        return view('dashboard', ['blogs' => Blog::latest()->filter(request(['search']))->paginate(3)]);
    }

    public function showAll()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('pages.blog.index', ['blogs' => Blog::latest()->paginate(3)]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.blog.create', ['blog' => new Blog()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // Update the store method
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
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
        return redirect()->route('blog')->with('success', 'Blog created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('pages.blog.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('pages.blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // Make sure the user is the owner of the blog
        if ($blog->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|min:150',
            'image' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('blog', 'public');
            $formFields['logo'] = $imagePath;
        }

        $blog->update($formFields);

        return back()->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        if ($blog->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $blog->delete();
        return redirect()->route('dashboard')->with('success', 'Blog deleted successfully');
    }
}
