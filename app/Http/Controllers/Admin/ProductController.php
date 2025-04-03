<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Media;
use App\Models\Product;
use App\Models\ProductBusinessService;
use App\Models\ProductFaq;
use App\Models\ProductFeature;
use App\Models\ProductPricePlan;
use App\Models\ProductTestimonial;
use App\Models\ProductWhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::select(['id', 'product_title', 'meta_keyword', 'meta_description', 'slug', 'created_at'])->get();

            return DataTables::of($products)
                ->addColumn('action', function ($product) {
                    return '<a href="' . route('admin.product.edit', $product->id) . '" class="btn btn-sm btn-primary">Edit</a>
                    <a href="' . route('admin.destroys', $product->id) . '" class="btn btn-sm btn-danger mt-2">Delete</a>';
                })
                ->rawColumns(['product_description', 'action'])
                ->make(true);
        }

        return view('admin.product.product-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        if (!isset($req->product_id)) {
            session()->forget('product_id');
        }
        return view('admin.product.create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();
        // dd($request->all());
        $step = $request->input('step');

        switch ($step) {
            case 'pro_detail':
                if (isset($request->product_id)) {

                    $product = Product::find($request->product_id);
                    $product->update($validatedData);
                    if ($request->hasFile('main_img')) {
                        optional($product->content_img)->delete();
                        Media::uploadMedia($request->main_img, $product, 'content');
                    }
                    toast('Product Details Updated successfully', 'success');
                    session()->flash('activeTab', 'feature');
                    return redirect()->route('admin.product.create', ['product_id' => $request->product_id]);
                } else {
                    $product = Product::create($validatedData);
                    if ($request->hasFile('main_img')) {
                        Media::uploadMedia($request->main_img, $product, 'content');
                    }

                    toast('Product Details Added successfully', 'success');
                    session()->flash('activeTab', 'feature');
                    session()->put('product_id', $product->id);
                    return redirect()->route('admin.product.create', ['product_id' => $product->id]);
                }

            case 'layout':
                $product_id = $request->product_id;

                if (!$product_id) {
                    toast('Please Add Product first', 'error');
                }
                $product = Product::find($product_id);
                if ($product->layout == 'pricePlan') {
                    $proLayout = ProductPricePlan::create([
                        'product_id' => $product_id,
                        'title' => $validatedData['title'],
                        'description' => $validatedData['description'],
                    ]);
                } else {
                    $proLayout = ProductBusinessService::create([
                        'product_id' => $product_id,
                        'tab_name' => $validatedData['tab_name'],
                        'tab_icon' => $validatedData['tab_icon'],
                        'header_icon' => $validatedData['header_icon'],
                        'header_text' => $validatedData['header_text'],
                        'title' => $validatedData['title'],
                        'description' => $validatedData['description'],
                    ]);

                    if ($validatedData['service_image']) {
                        Media::uploadMedia($validatedData['service_image'], $proLayout, 'business_service');
                    }
                }

                if ($proLayout) {
                    $product = Product::find($product_id);
                    if ($product->step < 2) {
                        $product->step = 2;
                        $product->save();
                    }
                }
                toast('Layout data added successfully', 'success');
                break;
            case 'feature':
                $product_id = $request->product_id;

                if (!$product_id) {
                    toast('Please Add Product first', 'error');
                }
                $proFeature = ProductFeature::create([
                    'product_id' => $product_id,
                    'icon' => $validatedData['feature']['icon'],
                    'title' => $validatedData['feature']['title'],
                    'detail' => $validatedData['feature']['detail'],
                ]);
                if ($proFeature) {
                    $product = Product::find($product_id);
                    if ($product->step < 2) {
                        $product->step = 2;
                        $product->save();
                    }
                }
                toast('Features Added successfully', 'success');
                break;

            case 'pro_testimonial':
                // dd($request->all());
                $product_id = $request->product_id;
                if (!$product_id) {
                    Alert::error('Warning', 'Please Add Product first');
                }
                $testimonial = ProductTestimonial::create([
                    'product_id' => $product_id,
                    'testimonial_image' => 'image',
                    'name' => $validatedData['testi']['name'],
                    'designation' => $validatedData['testi']['designation'],
                    'comment' => $validatedData['testi']['comment'],
                ]);
                if ($validatedData['testi']['pic']) {
                    Media::uploadMedia($validatedData['testi']['pic'], $testimonial);
                }
                toast('Testimonials Added successfully', 'success');
                break;

            case 'faqs':
                $product_id = $request->product_id;

                if (!$product_id) {
                    Alert::error('Warning', 'Please Add Product first');
                }
                ProductFaq::create([
                    'product_id' => $product_id,
                    'question' => $validatedData['faq']['question'],
                    'answer' => $validatedData['faq']['answer'],
                ]);
                toast('FAQs Added successfully', 'success');
                break;

            case 'media':
                // dd($request->slider_img);

                $product_id = $request->product_id;
                $product = Product::find($product_id);
                if ($request->hasFile('main_img')) {
                    optional($product->content_img)->delete();
                    Media::uploadMedia($request->main_img, $product, 'content');
                }

                if ($request->hasFile('faq_img')) {
                    optional($product->faqImg)->delete();
                    Media::uploadMedia($request->faq_img, $product, 'faq');
                }

                if ($request->hasFile('whyUs_img')) {
                    optional($product->whyUsImg)->delete();
                    Media::uploadMedia($request->whyUs_img, $product, 'whyUs');
                }

                if ($request->hasFile('product_banner')) {
                    optional($product->product_banner)->delete();
                    Media::uploadMedia($request->product_banner, $product, 'product_banner');
                }
                if ($request->hasFile('service_section2')) {
                    optional($product->service_section2)->delete();
                    Media::uploadMedia($request->service_section2, $product, 'service_section2');
                }

                if ($request->hasFile('slider_img')) {
                    foreach ($request->slider_img as $img) {
                        Media::uploadMedia($img, $product, 'slider');
                    }
                }
                $removedImages = $request->has('removed_images') ? json_decode($request->removed_images, true) : [];

                if (is_array($removedImages)) {
                    foreach ($removedImages as $mediaId) {
                        $media = Media::find($mediaId);

                        if ($media) {
                            Storage::delete('public/' . $media->media);
                            $media->delete();
                        }
                    }
                }

                toast('Media Added successfully', 'success');
                session()->flash('activeTab', 'media');
                return redirect()->route('admin.product.create', ['product_id' => $product_id]);
            default:
                break;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $step, string $pid = null)
    {
        if ($pid) {
            $data = '';
            switch ($step) {
                case 1:
                    $data = Product::find($pid);
                    return view('admin.product.partials.product-detail', ['data' => $data, 'product_id' => $pid]);
                case 2:
                    $data = Product::find($pid);
                    dd($data);
                    return view('admin.product.partials.priceLayout', ['data' => $data, 'product_id' => $pid]);

                case 3:
                    $data = Product::find($pid)->features;
                    return view('admin.product.partials.feature', ['data' => $data, 'product_id' => $pid]);

                case 4:
                    $data = Product::find($pid)->testimonials;
                    return view('admin.product.partials.testimonial', ['data' => $data, 'product_id' => $pid]);
                case 5:
                    $data = Product::find($pid)->whyus;
                    return view('admin.product.partials.why-us', ['data' => $data, 'product_id' => $pid]);
                case 6:
                    $data = Product::find($pid)->faqs;
                    return view('admin.product.partials.faq', ['data' => $data, 'product_id' => $pid]);
                case 7:
                    $data = Product::find($pid);
                    if ($data) {

                        return view('admin.product.partials.media', ['data' => $data, 'product_id' => $pid]);
                    }
            }
        } else {
            switch ($step) {
                case 1:
                    return view('admin.product.partials.product-detail');
                case 2:
                    return view('admin.product.partials.priceLayout');
                case 3:
                    return view('admin.product.partials.feature');
                case 4:
                    return view('admin.product.partials.testimonial');
                case 5:
                    return view('admin.product.partials.why-us');
                case 6:
                    return view('admin.product.partials.faq');
                case 7:
                    return view('admin.product.partials.media');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        session()->put('product_id', $id);
        return redirect()->route('admin.product.create', ['product_id' => $id]);
    }
    public function destroys(string $id)
    {
        session()->put('product_id', $id);
        $delete=Product::findOrFail($id);
        $delete->delete();
        return redirect()->route('admin.product.index');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        // dd($request->all());
        $validatedData = $request->validated();
        $step = $request->input('step');
        $product = Product::find($id);

        switch ($step) {
            case 'pro_detail':
                $product->update($validatedData); // Update the product with the validated data

                if ($request->hasFile('main_img')) {
                    optional($product->content_img)->delete();
                    Media::uploadMedia($request->main_img, $product, 'content');
                }

                toast('Product Details Updated successfully', 'success');
                session()->flash('activeTab', 'feature');
                return redirect()->route('admin.product.create', ['product_id' => $id]);
            case 'layout':
                dd(123);
                toast('FAQs Updated successfully', 'success');
                break;

            case 'feature':
                $product_id = $request->input('product_id'); // Get product_id from the request

                if (!$product_id) {
                    toast('Please Add Product first', 'error');
                    return redirect()->route('admin.product.edit', ['id' => $id]);
                }

                $productFeature = ProductFeature::updateOrCreate(
                    ['product_id' => $product_id], // Search criteria
                    [ // Values to update or insert
                        'icon' => $validatedData['feature']['icon'],
                        'title' => $validatedData['feature']['title'],
                        'detail' => $validatedData['feature']['detail'],
                    ]
                );

                // Update the product step if necessary
                $product = Product::find($product_id);
                if ($product && $product->step < 2) {
                    $product->step = 2;
                    $product->save();
                }

                toast('Features Updated successfully', 'success');
                break;

            case 'pro_testimonial':
                $productTestimonial = ProductTestimonial::where('product_id', $id)->first();

                if ($productTestimonial) {
                    $productTestimonial->update([
                        'name' => $validatedData['testi']['name'],
                        'designation' => $validatedData['testi']['designation'],
                        'comment' => $validatedData['testi']['comment'],
                    ]);

                    Media::uploadMedia($validatedData['testi']['pic'], $productTestimonial);
                } else {
                    ProductTestimonial::create([
                        'product_id' => $id,
                        'testimonial_image' => 'image',
                        'name' => $validatedData['testi']['name'],
                        'designation' => $validatedData['testi']['designation'],
                        'comment' => $validatedData['testi']['comment'],
                    ]);

                    Media::uploadMedia($validatedData['testi']['pic'], $productTestimonial);
                }

                toast('Testimonials Updated successfully', 'success');
                break;

            case 'faqs':
                $productFaq = ProductFaq::where('product_id', $id)->first();

                if ($productFaq) {
                    $productFaq->update([
                        'question' => $validatedData['faq']['question'],
                        'answer' => $validatedData['faq']['answer'],
                    ]);
                } else {
                    ProductFaq::create([
                        'product_id' => $id,
                        'question' => $validatedData['faq']['question'],
                        'answer' => $validatedData['faq']['answer'],
                    ]);
                }

                toast('FAQs Updated successfully', 'success');
                break;

            case 'media':

                if ($request->hasFile('main_img')) {
                    optional($product->content_img)->delete();
                    Media::uploadMedia($request->main_img, $product, 'content');
                }

                if ($request->hasFile('faq_img')) {
                    optional($product->faqImg)->delete();
                    Media::uploadMedia($request->faq_img, $product, 'faq');
                }

                if ($request->hasFile('whyUs_img')) {
                    optional($product->whyUsImg)->delete();
                    Media::uploadMedia($request->whyUs_img, $product, 'whyUs');
                }

                if ($request->hasFile('product_banner')) {
                    optional($product->product_banner)->delete();
                    Media::uploadMedia($request->product_banner, $product, 'product_banner');
                }
                if ($request->hasFile('service_section2')) {
                    optional($product->service_section2)->delete();
                    Media::uploadMedia($request->service_section2, $product, 'service_section2');
                }

                if ($request->hasFile('slider_img')) {
                    foreach ($request->slider_img as $img) {
                        Media::uploadMedia($img, $product, 'slider');
                    }
                }

                $removedImages = $request->has('removed_images') ? json_decode($request->removed_images, true) : [];

                if (is_array($removedImages)) {
                    foreach ($removedImages as $mediaId) {
                        $media = Media::find($mediaId);

                        if ($media) {
                            Storage::delete('public/' . $media->media);
                            $media->delete();
                        }
                    }
                }

                toast('Media Updated successfully', 'success');
                session()->flash('activeTab', 'media');
                return redirect()->route('admin.product.create', ['product_id' => $id]);

            default:
                break;
        }

        return redirect()->route('admin.product.edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $step, string $resource_id)
    {
        switch ($step) {
            case 'feature':
                $data = ProductFeature::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('feature deleted successfully', 'success');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                }
            case 'priceLayout':
                $data = ProductPricePlan::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('layout deleted successfully', 'success');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                }
            case 'businessLayout':
                $data = ProductBusinessService::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('layout deleted successfully', 'success');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                }
            case 'whyus':
                $data = ProductWhyUs::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('Whyus deleted successfully', 'success');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                }

            case 'pro_testimonial':

                $data = ProductTestimonial::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('testimonial deleted successfully', 'success');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                }
            case 'faqs':

                $data = ProductFaq::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('faq deleted successfully', 'success');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);
                }
        }
    }
    public function PageLayout(string $step, string $pid = null)
    {
        if ($pid) {
            $data = '';
            switch ($step) {
                case 1:
                    $data = Product::find($pid);
                    return view('admin.product.partials.product-detail', ['data' => $data, 'product_id' => $pid]);
                case 2:
                    $data = Product::find($pid);
                    return view('admin.product.partials.priceLayout', ['data' => $data, 'product_id' => $pid]);

                case 3:

                    $data = Product::find($pid)->features;
                    return view('admin.product.partials.feature', ['data' => $data, 'product_id' => $pid]);

                case 4:
                    $data = Product::find($pid)->testimonials;
                    return view('admin.product.partials.testimonial', ['data' => $data, 'product_id' => $pid]);
                case 5:
                    $data = Product::find($pid)->whyus;
                    return view('admin.product.partials.why-us', ['data' => $data, 'product_id' => $pid]);
                case 6:
                    $data = Product::find($pid)->faqs;
                    return view('admin.product.partials.faq', ['data' => $data, 'product_id' => $pid]);
                case 7:
                    $data = Product::find($pid);
                    if ($data) {

                        return view('admin.product.partials.media', ['data' => $data, 'product_id' => $pid]);
                    }
            }
        } else {
            switch ($step) {
                case 1:
                    return view('admin.product.partials.product-detail');
                case 2:
                    return view('admin.product.partials.priceLayout');

                case 3:

                    return view('admin.product.partials.feature');

                case 4:
                    return view('admin.product.partials.testimonial');
                case 5:
                    return view('admin.product.partials.why-us');
                case 6:
                    return view('admin.product.partials.faq');
                case 7:

                    return view('admin.product.partials.media');
            }
        }
    }
    public function productDelete(string $step, string $resource_id)
    {
        switch ($step) {
            case 'feature':
                $data = ProductFeature::find($resource_id);
                $product_id = $data->product_id;
                // dd($product_id);
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('feature deleted successfully', 'success');
                    return redirect()->route('admin.product.edit', $product_id);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.edit', $product_id);
                }
            case 'priceLayout':
                $data = ProductPricePlan::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('layout deleted successfully', 'success');
                    return redirect()->route('admin.product.edit', $product_id);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.edit', $product_id);
                }
            case 'businessLayout':
                $data = ProductBusinessService::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('layout deleted successfully', 'success');
                    return redirect()->route('admin.product.edit', $product_id);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.edit', $product_id);
                }
            case 'whyus':
                $data = ProductWhyUs::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('Whyus deleted successfully', 'success');
                    return redirect()->route('admin.product.edit', $product_id);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.edit', $product_id);
                }

            case 'pro_testimonial':

                $data = ProductTestimonial::find($resource_id);
                $product_id = $data->product_id;
                session()->put('product_id', $product_id);
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('testimonial deleted successfully', 'success');
                    return redirect()->route('admin.product.edit', $product_id);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.edit', $product_id);
                }
            case 'faqs':

                $data = ProductFaq::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('faq deleted successfully', 'success');
                    return redirect()->route('admin.product.edit', $product_id);
                } else {
                    session()->flash('activeTab', $step);
                    toast('Something went wrong', 'error');
                    return redirect()->route('admin.product.edit', $product_id);
                }
        }
    }
}
