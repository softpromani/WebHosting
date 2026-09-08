<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['slug', 'title', 'category', 'blog_image', 'description', 'tags', 'focus_keywords', 'meta_title', 'meta_description'];

    protected static function boot()
    {
        parent::boot();
        // Global scope to exclude test-blog from index and related lists (SEO)
        static::addGlobalScope('excludeTestBlog', function ($builder) {
            $builder->where('slug', '!=', 'test-blog');
        });
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $firstLine = strtok($blog->title ?? '', "\r\n");
                $blog->slug = $blog->generateUniqueBlogSlug($firstLine);
            } else {
                $blog->slug = Str::slug($blog->slug);
            }
        });
        static::updating(function ($blog) {
            if (empty($blog->slug)) {
                $firstLine = strtok($blog->title ?? '', "\r\n");
                $blog->slug = $blog->generateUniqueBlogSlug($firstLine);
            } else {
                $blog->slug = Str::slug($blog->slug);
            }
        });
    }

    private function generateUniqueBlogSlug($title)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    public function blogImage()
    {
        return $this->morphOne(Media::class, 'mediable')->where('type', 'blog');
    }

    /**
     * Accessor for clean Category name
     */
    public function getCategoryNameAttribute()
    {
        return !empty($this->category) ? $this->category : 'Technology';
    }

    /**
     * Accessor to get reliable, verified URL for the blog image
     */
    public function getImageUrlAttribute()
    {
        // 1. Check morphOne relation
        if ($this->blogImage && !empty($this->blogImage->media)) {
            $mediaPath = $this->blogImage->media;
            if (file_exists(public_path('storage/' . $mediaPath))) {
                return asset('storage/' . $mediaPath);
            }
            if (file_exists(public_path($mediaPath))) {
                return asset($mediaPath);
            }
        }

        // 2. Check direct blog_image attribute
        if (!empty($this->blog_image)) {
            if (str_starts_with($this->blog_image, 'http://') || str_starts_with($this->blog_image, 'https://')) {
                return $this->blog_image;
            }
            if (file_exists(public_path('storage/' . $this->blog_image))) {
                return asset('storage/' . $this->blog_image);
            }
            if (file_exists(public_path($this->blog_image))) {
                return asset($this->blog_image);
            }
        }

        // 3. Fallback high quality tech image
        return 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800';
    }

    /**
     * Accessor for clean plain-text excerpt
     */
    public function getExcerptAttribute()
    {
        $cleanText = strip_tags($this->description ?? '');
        $cleanText = html_entity_decode($cleanText, ENT_QUOTES, 'UTF-8');
        return Str::limit(trim(preg_replace('/\s+/', ' ', $cleanText)), 105);
    }

    /**
     * Accessor for estimated reading time
     */
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->description ?? ''));
        $minutes = max(1, (int) ceil($wordCount / 180));
        return $minutes . ' min read';
    }

    /**
     * Accessor for formatted publication date
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at ? $this->created_at->format('M d, Y') : date('M d, Y');
    }

    /**
     * Accessor to parse comma-separated tags into a clean array
     */
    public function getTagsArrayAttribute()
    {
        if (empty($this->tags)) {
            return [];
        }
        return array_values(array_filter(array_map('trim', explode(',', $this->tags))));
    }

    /**
     * Fetch AI-related blogs (matching AI, Artificial Intelligence, Machine Learning, Automation in tags, category, title, or focus keywords)
     */
    public static function getAiRelatedBlogs($limit = 3)
    {
        $aiBlogs = static::with('blogImage')
            ->where(function ($q) {
                $q->where('tags', 'LIKE', '%AI%')
                  ->orWhere('tags', 'LIKE', '%Artificial Intelligence%')
                  ->orWhere('tags', 'LIKE', '%Machine Learning%')
                  ->orWhere('tags', 'LIKE', '%Automation%')
                  ->orWhere('category', 'LIKE', '%AI%')
                  ->orWhere('category', 'LIKE', '%Automation%')
                  ->orWhere('title', 'LIKE', '%AI%')
                  ->orWhere('focus_keywords', 'LIKE', '%AI%');
            })
            ->latest()
            ->take($limit)
            ->get();

        if ($aiBlogs->count() < $limit) {
            $excludeIds = $aiBlogs->pluck('id')->toArray();
            $fallbacks = static::with('blogImage')
                ->whereNotIn('id', $excludeIds)
                ->latest()
                ->take($limit - $aiBlogs->count())
                ->get();
            $aiBlogs = $aiBlogs->concat($fallbacks);
        }

        return $aiBlogs;
    }
}
