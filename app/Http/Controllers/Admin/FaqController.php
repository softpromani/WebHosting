<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Faq::select(['id', 'question', 'answer'])->get();

            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    return '
                    <a href="' . route('admin.faqs.edit', $data->id) . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <button class="btn btn-sm btn-danger delete-faq" data-id="' . $data->id . '"><i class="nav-icon fa-solid fa-trash"></i></button>
                ';
                })
                ->rawColumns(['answer', 'action'])
                ->make(true);
        }
        return view('admin.faq.faq');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.faqCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $data = Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        if ($data) {
            toast('Faq Created', 'success');
            return redirect()->route('admin.faqs.index');
        } else {
            toast('Faq Not Created', 'error');
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
        $editFaq = Faq::find($id);
        $faqs = Faq::get();
        return view('admin.faq.faqCreate', compact('editFaq', 'faqs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $data = Faq::find($id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        if ($data) {
            toast('Faq Updated', 'success');
            return redirect()->route('admin.faqs.index');
        } else {
            toast('Faq Not Updated', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::find($id);



        if ($faq->delete()) {
            return response()->json(['success' => 'FAQ deleted successfully.'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete FAQ.'], 500);
        }
    }
}
