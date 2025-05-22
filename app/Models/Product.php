<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['menu_id', 'slug', 'product_title', 'meta_keyword', 'meta_description', 'product_description', 'service_title', 'service_description_1', 'service_description_2', 'step', 'layout', 'meta_page','pro_img_content'];

    protected static function boot()
    {
        Parent::boot();
        static::creating(function ($product) {
            $product->slug = $product->generateUniqueSlug($product->product_title);
        });

        // static::updating(function ($product) {
        //     $product->slug = $product->generateUniqueSlug($product->product_title);
        // });

        static::created(function ($product) {
            $product->step = 1;
            $product->save();
        });

    }
    private function generateUniqueSlug($title)
    {
        $slug         = Str::slug($title);
        $originalSlug = $slug;
        $counter      = 1;

        while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    public function features()
    {
        return $this->hasMany(ProductFeature::class, 'product_id');
    }
    public function whyus()
    {
        return $this->hasMany(ProductWhyUs::class, 'product_id');
    }
    public function counters()
    {
        return $this->hasMany(ProductCounter::class, 'product_id');
    }
    public function testimonials()
    {
        return $this->hasMany(ProductTestimonial::class, 'product_id');
    }
    public function faqs()
    {
        return $this->hasMany(ProductFaq::class, 'product_id');
    }
    public function productBusinessServices()
    {
        return $this->hasMany(ProductBusinessService::class, 'product_id');
    }
    public function productPricePlans()
    {
        return $this->hasMany(ProductPricePlan::class, 'product_id');
    }

    public function content_img()
    {
        return $this->morphOne(Media::class, 'mediable')->where('type', 'content');
    }
    public function faqImg()
    {
        return $this->morphOne(Media::class, 'mediable')->where('type', 'faq');
    }

    public function whyUsImg()
    {
        return $this->morphOne(Media::class, 'mediable')->where('type', 'whyUs');
    }
    public function serviceSection2()
    {
        return $this->morphOne(Media::class, 'mediable')->where('type', 'service_section2');
    }

    public function slide_img()
    {
        return $this->morphMany(Media::class, 'mediable')->where('type', 'slider');
    }
    public function product_banner()
    {
        return $this->morphOne(Media::class, 'mediable')->where('type', 'product_banner');
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
