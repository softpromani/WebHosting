<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Models\Product;
use App\Models\ProductFaq;
use Illuminate\Http\Request;
use App\Models\ProductCounter;
use App\Models\ProductFeature;
use App\Models\ProductTestimonial;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\ProductWhyUs;
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
                    return '<a href="' . route('admin.product.edit', $product->id) . '" class="btn btn-sm btn-primary">Edit</a>';
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
        if(!isset($req->product_id))
        {
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
        $step = $request->input('step');

        switch ($step) {
            case 'pro_detail':
                if (isset($request->product_id)) {
                    $product = Product::find($request->product_id)->update($validatedData);
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
                    session()->put('product_id',$product->id);
                    return redirect()->route('admin.product.create', ['product_id' => $product->id]);
                }


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
            // case 'whyus':
            //     $product_id = $request->product_id;
            //     if (!$product_id) {
            //         Alert::error('Warning', 'Please Add Product first');
            //     }
            //     $allwhyusStored = true;

            //     foreach ($validatedData['whyus'] as $whyusData) {
            //         $proWhyus = ProductWhyUs::create([
            //             'product_id' => $product_id,
            //             'icon' => $whyusData['icon'],
            //             'title' => $whyusData['title'],
            //             // 'colour' => $whyusData['colour'],
            //             'detail' => $whyusData['detail'],
            //         ]);
            //         if (!$proWhyus) {
            //             $allwhyusStored = false;
            //         }
            //         if ($allwhyusStored) {
            //             $product = Product::find($product_id);
            //             if ($product->step < 2) {
            //                 $product->step = 2;
            //                 $product->save();
            //             }
            //         }

            //     }
            //     toast('Why-Us Added successfully', 'success');
            //     session()->flash('activeTab', 'pro_counter');
            //     return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);

            // case 'pro_counter':
            //     foreach ($validatedData['counter'] as $counterData) {
            //         $product_id = $request->product_id;

            //         if (!$product_id) {
            //             Alert::error('Warning', 'Please Add Product first');
            //         }
            //         $proCount = ProductCounter::create([
            //             'product_id' => $product_id,
            //             'icon' => $counterData['icon'],
            //             'count' => $counterData['count'],
            //             'title' => $counterData['title'],
            //         ]);
            //     }
            //     $product = Product::find($product_id);
            //     if ($product->step < 3) {
            //         $product->step = 3;
            //         $product->save();
            //     }
            //     toast('Counters Added successfully', 'success');
            //     session()->flash('activeTab', 'pro_testimonal');
            //     return redirect()->route('admin.product.create')->with(['product_id' => $product_id]);

            case 'pro_testimonial':
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

                    Media::uploadMedia($validatedData['testi']['pic'], $testimonial);
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
                    Media::uploadMedia($request->main_img, $product, 'content');
                }

                if ($request->hasFile('faq_img')) {
                    Media::uploadMedia($request->faq_img, $product, 'faq');
                }

                if ($request->hasFile('whyUs_img')) {
                    Media::uploadMedia($request->whyUs_img, $product, 'whyUs');
                }

                if ($request->hasFile('product_banner')) {
                    Media::uploadMedia($request->product_banner, $product, 'product_banner');
                }

                if ($request->hasFile('slider_img')) {
                    foreach ($request->slider_img as $img) {
                        Media::uploadMedia($img, $product, 'slider');
                    }
                }

                toast('Media Added successfully', 'success');
                session()->flash('activeTab', 'media');
                return redirect()->route('admin.product.create',['product_id'=>$product_id]);
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
                    $data = Product::find($pid)->features;
                    return view('admin.product.partials.feature', ['data' => $data, 'product_id' => $pid]);
                case 3:
                    $data = Product::find($pid)->counters;
                    return view('admin.product.partials.counter', ['data' => $data, 'product_id' => $pid]);
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
                    return view('admin.product.partials.feature');
                case 3:
                    return view('admin.product.partials.counter');
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
        session()->put('product_id',$id);
        return redirect()->route('admin.product.create',['product_id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
            case 'pro_counter':

                $data = ProductCounter::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('counter deleted successfully', 'success');
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
                    $data = Product::find($pid)->features;
                    return view('admin.product.partials.feature', ['data' => $data, 'product_id' => $pid]);
                case 3:
                    $data = Product::find($pid)->counters;
                    return view('admin.product.partials.counter', ['data' => $data, 'product_id' => $pid]);
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
                    return view('admin.product.partials.feature');
                case 3:
                    return view('admin.product.partials.counter');
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
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('feature deleted successfully', 'success');
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
            case 'pro_counter':

                $data = ProductCounter::find($resource_id);
                $product_id = $data->product_id;
                if ($data->delete()) {
                    session()->flash('activeTab', $step);
                    toast('counter deleted successfully', 'success');
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
}