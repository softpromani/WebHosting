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
        // added - Redirect legacy blogs to Cloud Architecture (SEO/Topical Authority consolidation)
        $legacyBlogSlugs = [
            'how-quickbooks-hosting-boosts-efficiency-for-accounting-firms',
            'understanding-the-security-benefits-of-cloud-hosting-for-financial-software',
            'the-future-of-business-software-why-hosting-is-becoming-the-new-standard'
        ];
        if (in_array($slug, $legacyBlogSlugs) || preg_match('/(quickbooks|accounting|drake-tax|tax-software|financial-software)/i', $slug)) {
            return redirect()->route('services.cloud_architecture', [], 301);
        }

        $blog         = Blog::where('slug', $slug)->first();
        $relatedblogs = Blog::latest()->take(5)->get();
        $testimonial  = Testimonial::get();
        return view('home.blog', compact('blog', 'relatedblogs', 'testimonial'));
    }
}
