<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request  $request)
    {
        if ($request->ajax()) {
            $data = Blog::with('blogImage')->select(['id', 'title', 'description'])->get();

            return DataTables::of($data)
                ->addColumn('blog_image', function ($data) {
                    if ($data->blogImage) {
                        $url = asset('storage/' . $data->blogImage->media);
                        return '<img src="' . $url . '" style="width:80px;height:80px;" alt="Image">';
                    }
                    return 'No Image';
                })
                ->addColumn('action', function ($data) {
                    return '
                <a href="' . route('admin.blog.edit', $data->id) . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen"></i></a>
                <button class="btn btn-sm btn-danger delete-blog" data-id="' . $data->id . '"><i class="nav-icon fa-solid fa-trash"></i></button>
            ';
                })
                ->rawColumns(['blog_image', 'action'])
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
            'blog_image' => 'required|image',
        ]);

        $data = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');

            $media = Media::uploadMedia($file, $data, 'blog');

            $data->blogImage()->save($media);
            $data->update([
                'blog_image' => $media->media
            ]);
        }

        if ($data) {
            toast('Blog Created Successfully', 'success');
            return redirect()->route('admin.blog.index');
        } else {
            toast('Blog Not Created', 'error');
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
        $editBlog = Blog::with('blogImage')->find($id);
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
            'blog_image' => 'nullable|image', 
        ]);

        $blog = Blog::find($id);

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if ($request->hasFile('blog_image')) {
            $media = Media::uploadMedia($request->file('blog_image'), $blog, 'blog');
            $blog->update([
                'blog_image' => $media->media
            ]);

            if ($blog->blogImage) {
                $blog->blogImage->update([
                    'media' => $media->media,
                    'size' => $media->size,
                    'extension' => $media->extension,
                    'type' => $media->type,
                ]);
            } else {
                $blog->blogImage()->save($media);
            }
        }

        if ($blog) {
            toast('Blog Updated Successfully', 'success');
            return redirect()->route('admin.blog.index');
        } else {
            toast('Blog not updated', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['error' => 'Blog not found.'], 404);
        }
        if ($blog->blogImage) {
            $blog->blogImage->delete();
        }
        if ($blog->delete()) {
            return response()->json(['success' => 'Blog deleted successfully.'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Blog.'], 500);
        }
    }
}
