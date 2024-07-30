<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::select(['id','slug', 'title', 'blog_image', 'description'])->get();

            return DataTables::of($data)
                ->addColumn('blog_image', function ($data) {
                    $url = asset($data->blog_image);
                    return '<img src="' . $url . '" style="width:80px;height:80px;" alt="Image">';
                })
                ->addColumn('action', function ($data) {
                    return '
                    <a href="' . route('admin.blogs.edit', $data->id) . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                    <button class="btn btn-sm btn-danger delete-blog" data-id="' . $data->id . '"><i class="nav-icon fa-solid fa-trash"></i></button>
                ';
                })
                ->rawColumns(['blog_image','description', 'action'])
                ->make(true);
        }
        return view('admin.blog.blogList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'blog_image' => 'required',
        ]);

        if ($request->hasFile('blog_image')) {
            $upic = 'blog-' . time() . '-' . rand(0, 99) . '.' . $request->blog_image->extension();
            $request->blog_image->move(public_path('upload/blog/images/'), $upic);
            $pic_name = 'upload/blog/images/' . $upic;
        }
        
        $data = Blog::create([
            'title' => $request->title,
            'blog_image' => $pic_name ?? null,
            'description' => $request->description,
        ]);
        if ($data) {
            toast('BLog Created Successfully', 'success');
            return redirect()->route('admin.blogs.index');
        } else {
            toast('BLogs Not Created', 'error');
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
        $editBlog = Blog::find($id);
        return view('admin.blog.createBlog', compact('editBlog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('blog_image')) {
            $upic = 'blog-' . time() . '-' . rand(0, 99) . '.' . $request->blog_image->extension();
            $request->blog_image->move(public_path('upload/blog/images/'), $upic);
            $pic_name = 'upload/blog/images/' . $upic;
            $data = Blog::find($id)->update(['blog_image' => $pic_name]);
        }

        $data = Blog::find($id)->update([
            'title' => $request->title,
            'blog' => $pic_name ?? null,
            'description' => $request->description,
        ]);
        if ($data) {
            toast('BLog Updated Successfully', 'success');
            return redirect()->route('admin.blogs.index');
        } else {
            toast('BLogs not updated', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $t = Blog::find($id);
        $blogs = $t->delete();
        if ($blogs) {
            return response()->json(['success' => 'BLog deleted successfully.'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Blog.'], 500);
        }
    }
}
