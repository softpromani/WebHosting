<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::with('blogImage');

        if ($request->filled('category')) {
            $category = trim($request->input('category'));
            $query->where(function ($q) use ($category) {
                $q->where('category', $category)
                  ->orWhere('title', 'like', "%{$category}%")
                  ->orWhere('tags', 'like', "%{$category}%");
            });
        }

        if ($request->filled('search')) {
            $search = trim($request->input('search'));
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('tags', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        $blogs = $query->latest()->get();
        $featuredBlog = Blog::with('blogImage')->latest()->first();
        $recentBlogs = Blog::with('blogImage')->latest()->take(5)->get();

        // Dynamic categories with counts
        $dbCategories = Blog::whereNotNull('category')->where('category', '!=', '')
            ->selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->pluck('count', 'category')
            ->toArray();

        $defaultCategories = [
            'Strategy & Roadmaps',
            'Design & Research',
            'Data & Governance',
            'Use Cases by Industry',
            'Security & Compliance',
        ];

        $categoriesList = [];
        foreach ($defaultCategories as $cat) {
            $count = $dbCategories[$cat] ?? Blog::where('title', 'like', "%{$cat}%")->orWhere('tags', 'like', "%{$cat}%")->count();
            $categoriesList[$cat] = sprintf('%02d', $count > 0 ? $count : 1);
        }

        foreach ($dbCategories as $cat => $count) {
            if (!isset($categoriesList[$cat])) {
                $categoriesList[$cat] = sprintf('%02d', $count);
            }
        }

        $popularTags = ['AI', 'Security', 'Data', 'Cloud', 'Analytics', 'DevOps'];

        return view('home.blogs_index', compact('blogs', 'featuredBlog', 'recentBlogs', 'categoriesList', 'popularTags'));
    }

    public function show($slug)
    {
        // Redirect legacy blogs to Cloud Architecture (SEO/Topical Authority consolidation)
        $legacyBlogSlugs = [
            'how-quickbooks-hosting-boosts-efficiency-for-accounting-firms',
            'understanding-the-security-benefits-of-cloud-hosting-for-financial-software',
            'the-future-of-business-software-why-hosting-is-becoming-the-new-standard'
        ];
        if (in_array($slug, $legacyBlogSlugs) || preg_match('/(quickbooks|accounting|drake-tax|tax-software|financial-software)/i', $slug)) {
            return redirect()->route('services.cloud_architecture', [], 301);
        }

        $blog = Blog::with('blogImage')->where('slug', $slug)->firstOrFail();
        $relatedblogs = Blog::with('blogImage')->where('id', '!=', $blog->id)->latest()->take(5)->get();
        $recentBlogs = Blog::with('blogImage')->latest()->take(5)->get();
        $testimonial = Testimonial::get();

        // Categories with formatted 2-digit counts for sidebar and dark bottom section
        $dbCategories = Blog::whereNotNull('category')->where('category', '!=', '')
            ->selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->pluck('count', 'category')
            ->toArray();

        $defaultCategories = [
            'Strategy & Roadmaps',
            'Design & Research',
            'Data & Governance',
            'Use Cases by Industry',
            'Security & Compliance',
        ];

        $categoriesList = [];
        foreach ($defaultCategories as $cat) {
            $count = $dbCategories[$cat] ?? Blog::where('title', 'like', "%{$cat}%")->orWhere('tags', 'like', "%{$cat}%")->count();
            $categoriesList[$cat] = sprintf('%02d', $count > 0 ? $count : 1);
        }

        foreach ($dbCategories as $cat => $count) {
            if (!isset($categoriesList[$cat])) {
                $categoriesList[$cat] = sprintf('%02d', $count);
            }
        }

        $popularTags = ['Ransomware', 'Cybersecurity', 'Cloud', 'Data', 'DevOps', 'AI', 'Security', 'Compliance'];
        $featuredBlog = Blog::with('blogImage')->where('id', '!=', $blog->id)->latest()->first();
        if (!$featuredBlog) {
            $featuredBlog = $blog;
        }

        return view('home.blog', compact('blog', 'relatedblogs', 'recentBlogs', 'testimonial', 'categoriesList', 'popularTags', 'featuredBlog'));
    }
}

