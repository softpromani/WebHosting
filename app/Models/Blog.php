<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=['slug','title','blog_image','description'];

    protected static function boot(){
        Parent::boot();
        static::creating(function ($blog) {
            $blog->slug =$blog->generateUniqueBlogSlug($blog->title);
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
    public function blogImage(){
        return $this->morphOne(Media::class,'mediable')->where('type','blog');
    }
}
