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
            $query->where('category', $category);
        }

        if ($request->filled('search')) {
            $search = trim($request->input('search'));
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%")
                  ->orWhere('tags', 'like', "%{$search}%");
            });
        }

        $blogs = $query->latest()->get();
        $featuredBlog = Blog::with('blogImage')->latest()->first();
        $recentBlogs = Blog::with('blogImage')->latest()->take(5)->get();

        // Dynamic categories with real counts from database
        $categoriesList = Blog::whereNotNull('category')
            ->where('category', '!=', '')
            ->selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->orderBy('category', 'asc')
            ->pluck('count', 'category')
            ->map(function ($count) {
                return sprintf('%02d', (int)$count);
            })
            ->toArray();

        $popularTags = $this->getPopularTags(8);

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

        // Dynamic categories with real counts from database
        $categoriesList = Blog::whereNotNull('category')
            ->where('category', '!=', '')
            ->selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->orderBy('category', 'asc')
            ->pluck('count', 'category')
            ->map(function ($count) {
                return sprintf('%02d', (int)$count);
            })
            ->toArray();

        $popularTags = $this->getPopularTags(8);
        $featuredBlog = Blog::with('blogImage')->where('id', '!=', $blog->id)->latest()->first();
        if (!$featuredBlog) {
            $featuredBlog = $blog;
        }

        return view('home.blog', compact('blog', 'relatedblogs', 'recentBlogs', 'testimonial', 'categoriesList', 'popularTags', 'featuredBlog'));
    }

    /**
     * Helper to get most common/popular tags dynamically across all blogs
     */
    private function getPopularTags($limit = 8)
    {
        $allTags = Blog::whereNotNull('tags')
            ->where('tags', '!=', '')
            ->pluck('tags')
            ->toArray();

        $tagCounts = [];
        foreach ($allTags as $tagString) {
            $tags = array_filter(array_map('trim', explode(',', $tagString)));
            foreach ($tags as $tag) {
                if (!empty($tag)) {
                    $tagCounts[$tag] = ($tagCounts[$tag] ?? 0) + 1;
                }
            }
        }

        // Sort descending by frequency (most common tags first)
        arsort($tagCounts);

        $popular = array_keys(array_slice($tagCounts, 0, $limit, true));

        if (empty($popular)) {
            $popular = ['Cybersecurity', 'Managed IT Services', 'Cloud', 'AI', 'Security', 'Data'];
        }

        return $popular;
    }
}

