<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    use HasFactory;
    protected $fillable=['menu_id','slug','product_title','meta_keyword','meta_description','product_description','step'];

    protected static function boot(){
        Parent::boot();
        static::creating(function ($product) {
            $product->slug =$product->generateUniqueSlug($product->product_title);
        });
        static::created(function ($product) {
            $product->step = 1;
            $product->save();
        });

    }
    private function generateUniqueSlug($title)
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

    public function features(){
        return $this->hasMany(ProductFeature::class,'product_id');
    }
}
