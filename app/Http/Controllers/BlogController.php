<?php
namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function show($slug)
    {
        $blog         = Blog::where('slug', $slug)->first();
        $relatedblogs = Blog::latest()->take(5)->get();
        return view('home.blog', compact('blog', 'relatedblogs'));
    }
}
