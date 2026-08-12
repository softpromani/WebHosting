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
        // added - Redirect legacy products to Cloud Architecture (SEO/Topical Authority consolidation)
        $legacySlugs = [
            'quickbooks-pro-desktop-hosting',
            'quickbooks-enterprise-cloud-hosting',
            'quickbooks-desktop-premier-cloud-hosting',
            'sage-50-cloud-hosting',
            'sage-100-cloud-hosting',
            'sage-300-cloud-hosting',
            'drake-tax-software-cloud-hosting',
            'ultratax-software-cloud-hosting',
            'proseries-tax-software-cloud-hosting'
        ];
        if (in_array($slug, $legacySlugs)) {
            return redirect()->route('services.cloud_architecture', [], 301);
        }

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
