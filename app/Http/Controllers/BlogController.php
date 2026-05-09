<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('blogImage')->latest()->paginate(9);
        return view('home.blogs_index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog         = Blog::where('slug', $slug)->first();
        $relatedblogs = Blog::latest()->take(5)->get();
        $testimonial  = Testimonial::get();
        return view('home.blog', compact('blog', 'relatedblogs', 'testimonial'));
    }
}
