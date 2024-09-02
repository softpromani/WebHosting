<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricePlan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PricePlan::select(['id', 'title', 'price', 'billing_cycle', 'trial_days', 'features'])->get();

            // Decode features and join them with commas
            $data->map(function ($item) {
                $featuresArray = json_decode($item->features, true);
                $item->features = $featuresArray ? implode(', ', $featuresArray) : '';
                return $item;
            });

            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    return '
                    <a href="' . route('admin.price-plan.edit', $data->id) . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <button class="btn btn-sm btn-danger delete-blog" data-id="' . $data->id . '"><i class="nav-icon fa-solid fa-trash"></i></button>
                ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.PricePlan.pricePlan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.PricePlan.createPlan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'billing_cycle' => 'required',
            'features.*' => 'required|string',
        ]);
        if (empty($request->features[0]) && count($request->features) > 1) {
            $request->validate([
                'features.0' => 'required|string', // Ensure the first feature is not empty
            ], [
                'features.0.required' => 'The first feature is required and cannot be empty.', // Custom message
            ]);

        }

        $data = PricePlan::create([
            'title' => $request->title,
            'price' => $request->price,
            'billing_cycle' => $request->billing_cycle,
            'trial_days' => $request->trial_days,
            'features' => json_encode($request->features),
        ]);

        if ($data) {
            toast('Plan Created Successfully', 'success');
            return redirect()->route('admin.price-plan.index');
        } else {
            toast('Plan Not Created', 'error');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editPricePlan = PricePlan::findOrFail($id);
        return view('admin.PricePlan.createPlan', compact('editPricePlan'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'billing_cycle' => 'required',
            'features.*' => 'required|string',
        ]);
        if (empty($request->features[0]) && count($request->features) > 1) {
            $request->validate([
                'features.0' => 'required|string', // Ensure the first feature is not empty
            ], [
                'features.0.required' => 'The first feature is required and cannot be empty.', // Custom message
            ]);

        }

        $data = PricePlan::find($id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'billing_cycle' => $request->billing_cycle,
            'trial_days' => $request->trial_days,
            'features' => json_encode($request->features),
        ]);

        if ($data) {
            toast('Plan Updated Successfully', 'success');
            return redirect()->route('admin.price-plan.index');
        } else {
            toast('Plan Not Updated', 'error');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plan = PricePlan::find($id);

        if (!$plan) {
            return response()->json(['error' => 'Plan not found.'], 404);
        }
        if ($plan->delete()) {
            return response()->json(['success' => 'Plan deleted successfully.'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Plan.'], 500);
        }

    }
}
