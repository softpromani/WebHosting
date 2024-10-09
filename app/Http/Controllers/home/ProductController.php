<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductCounter;
use App\Models\ProductFaq;
use App\Models\ProductFeature;
use App\Models\ProductTestimonial;
use App\Models\ProductWhyUs;

class ProductController extends Controller
{
    public function index($slug)
    {
        $products = Product::with('slide_img')->where('slug', $slug)->first();
        if (!$products) {
            return abort(404, 'Product not found');
        }

        $metaKeywords = explode(',', $products->meta_keyword);
        $features = ProductFeature::where('product_id', $products->id)->get();
        $counters = ProductCounter::where('product_id', $products->id)->get();
        $testimonials = ProductTestimonial::where('product_id', $products->id)->with('media')->get();
        $faqs = ProductFaq::where('product_id', $products->id)->get();
        $whyus = ProductWhyUs::where('product_id', $products->id)->get();
        $blogs = Blog::with('blogImage')->get();
        return view('home.product', compact('products', 'features', 'counters', 'testimonials', 'faqs', 'whyus', 'blogs'));
    }
}
