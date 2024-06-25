<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Product;
use App\Models\ProductCounter;
use App\Models\ProductFaq;
use App\Models\ProductFeature;
use App\Models\ProductTestimonial;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug){
        $products = Product::where('slug',$slug)->first();
        $metaKeywords = explode(',', $products->meta_keyword);
        $features = ProductFeature::where('product_id',$products->id)->get();
        $counters = ProductCounter::where('product_id',$products->id)->get();
        $testimonials = ProductTestimonial::where('product_id',$products->id)->get();
        $faqs = ProductFaq::where('product_id',$products->id)->get();
        $medias = Media::where('type','slider')->get();
        return view('home.product',compact('products','metaKeywords','features','counters','testimonials','faqs','medias'));
    }
}
