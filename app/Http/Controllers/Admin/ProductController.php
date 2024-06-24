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
        $products = Product::select(['id', 'title', 'meta_keyword', 'meta_description', 'product_description', 'created_at'])->get();

        return DataTables::of($products)
            ->addColumn('action', function ($product) {
                return '<a href="/products/' . $product->id . '/edit" class="btn btn-sm btn-primary">Edit</a>';
            })
            ->rawColumns(['product_description', 'action']) // Specify columns containing HTML
            ->make(true);
    }

    return view('admin.product.product-list');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // Retrieve the validated input data
        $validatedData = $request->validated();
        // Get the current step
        $step = $request->input('step');
        switch ($step) {
            case 'pro_detail':
                $product = Product::create($validatedData);
                toast('Product Details Added successfully', 'success');
                session()->flash('activeTab', 'feature');
                return redirect()->route('admin.product.create')->with(['product_id'=>$product->id]);

            case 'feature':
                $product_id = $request->product_id;

                if (!$product_id) {
                    Alert::error('Warning', 'Please Add Product first');
                }
                $allFeaturesStored = true;

                foreach ($validatedData['feature'] as $featureData) {
                    $proFeature = ProductFeature::create([
                        'product_id' => $product_id,
                        'icon' => $featureData['icon'],
                        'title' => $featureData['title'],
                        'detail' => $featureData['detail'],
                    ]);
                    if (!$proFeature) {
                        $allFeaturesStored = false;
                    }
                    if ($allFeaturesStored) {
                        $product = Product::find($product_id);
                        if($product->step<2)
                        {
                        $product->step = 2;
                        $product->save();
                        }
                    }

                }
                toast('Features Added successfully', 'success');
                session()->flash('activeTab', 'pro_counter');
                return redirect()->route('admin.product.create')->with(['product_id'=>$product_id]);

            case 'pro_counter':
                foreach ($validatedData['counter'] as $counterData) {
                    $product_id =$request->product_id;

                    if (!$product_id) {
                        Alert::error('Warning', 'Please Add Product first');
                    }
                    $proCount = ProductCounter::create([
                        'product_id' => $product_id,
                        'icon' => $counterData['icon'],
                        'count' => $counterData['count'],
                        'title' => $counterData['title'],
                    ]);
                }
                $product = Product::find($product_id);
                if($product->step<3){
                $product->step = 3;
                $product->save();
                }
                toast('Counters Added successfully', 'success');
                session()->flash('activeTab', 'pro_testimonal');
                return redirect()->route('admin.product.create')->with(['product_id'=>$product_id]);

            case 'pro_testimonal':
                $product_id = $request->product_id;

                if (!$product_id) {
                    Alert::error('Warning', 'Please Add Product first');
                }

                foreach ($validatedData['testi'] as $testiData) {
                    $picPath = $testiData['pic']->store('testimonials', 'public');
                    ProductTestimonial::create([
                        'product_id' => $product_id,
                        'pic' => $picPath,
                        'name' => $testiData['name'],
                        'designation' => $testiData['designation'],
                        'comment' => $testiData['comment'],
                    ]);
                }
                toast('Testimonials Added successfully', 'success');
                session()->flash('activeTab', 'faqs');
                return redirect()->route('admin.product.create')->with(['product_id'=>$product_id]);

            case 'faqs':
                $product_id = $request->product_id;

                if (!$product_id) {
                    Alert::error('Warning', 'Please Add Product first');
                }
                foreach ($validatedData['faq'] as $faqData) {
                    ProductFaq::create([
                        'product_id'=>$product_id,
                        'question' => $faqData['question'],
                        'answer' => $faqData['answer'],
                    ]);
                }
                toast('FAQs Added successfully', 'success');
                session()->flash('activeTab', 'media');
                
                return redirect()->route('admin.product.create')->with(['product_id'=>$product_id]);

            case 'media':
                dd($request->all());
                break;

            default:
                break;
        }
        toast('Product Added successfully', 'success');
        return redirect()->back();
    }



    /**
     * Display the specified resource.
     */
    public function show(string $step, string $pid = null)
    {
        if ($pid) {
            $data='';
             switch ($step) {
                case 1:
                    $data=Product::find($pid);
                    return view('admin.product.partials.product-detail',['data'=>$data,'product_id'=>$pid]);
                case 2:
                    $data=Product::find($pid)->features;
                    return view('admin.product.partials.feature',['data'=>$data,'product_id'=>$pid]);
                case 3:
                    
                    return view('admin.product.partials.counter',['data'=>$data,'product_id'=>$pid]);
                case 4:
                    return view('admin.product.partials.testimonial',['data'=>$data,'product_id'=>$pid]);
                case 5:
                    return view('admin.product.partials.why-us',['data'=>$data,'product_id'=>$pid]);
                case 6:
                    return view('admin.product.partials.faq',['data'=>$data,'product_id'=>$pid]);
                case 7:
                    return view('admin.product.partials.media',['data'=>$data,'product_id'=>$pid]);
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
