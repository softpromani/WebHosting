<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimonial::select(['id', 'name', 'position', 'pic', 'description', 'status'])->get();

            return DataTables::of($data)
                ->addColumn('pic', function ($data) {
                    $url = asset($data->pic);
                    return '<img src="' . $url . '" style="width:80px;height:80px;" alt="Image">';
                })
                ->addColumn('action', function ($data) {
                    return '
                    <a href="' . route('admin.testimonial.edit', $data->id) . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <button class="btn btn-sm btn-danger delete-team" data-id="' . $data->id . '"><i class="nav-icon fa-solid fa-trash"></i></button>
                ';
                })
                ->rawColumns(['pic', 'action'])
                ->make(true);
        }
        return view('admin.testimonial.testimonial');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.testimonialCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'pic' => 'required',
        ]);

        if ($request->hasFile('pic')) {
            $upic = 'testimonial-' . time() . '-' . rand(0, 99) . '.' . $request->pic->extension();
            $request->pic->move(public_path('upload/testimonial/images/'), $upic);
            $pic_name = 'upload/testimonial/images/' . $upic;
        }

        $data = Testimonial::create([
            'name' => $request->name,
            'position' => $request->position,
            'pic' => $pic_name ?? null,
            'description' => $request->description,
        ]);
        if ($data) {
            toast('Testimonial Created Successfully', 'success');
            return redirect()->route('admin.testimonial.index');
        } else {
            toast('Testimonial Not Created', 'error');
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
        $editTestimonial = Testimonial::find($id);
        return view('admin.testimonial.testimonialCreate', compact('editTestimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
        ]);

        if ($request->hasFile('pic')) {
            $upic = 'team-' . time() . '-' . rand(0, 99) . '.' . $request->pic->extension();
            $request->pic->move(public_path('upload/team/images/'), $upic);
            $pic_name = 'upload/team/images/' . $upic;
            $data = Testimonial::find($id)->update(['pic' => $pic_name]);
        }

        $data = Testimonial::find($id)->update([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
        ]);
        if ($data) {
            toast('Testimonial Updated Successfully', 'success');
            return redirect()->route('admin.testimonial.index');
        } else {
            toast('Testimonial Not Updated', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $t = Testimonial::find($id);
        $testimonial = $t->delete();
        if ($testimonial) {
            return response()->json(['success' => 'Testimonial deleted successfully.'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Testimonial.'], 500);
        }
    }
}
