<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        if($req->ajax()){
            $products = Product::select(['id', 'name', 'price', 'category', 'created_at']);
        
            return DataTables::of($products)
                ->addColumn('action', function ($product) {
                    return '<a href="/products/' . $product->id . '/edit" class="btn btn-sm btn-primary">Edit</a>';
                })
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
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $pid,string $step)
    {
        if($pid){

        }
        else
        {
        //    switch($step){
        //     case 1: view('admin.product.partials.product-detail');
        //     case 2:
        //     case 3:
        //     case 4:
        //     case 5:
        //     case 6:
        //     case 7:
        //    } 
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
