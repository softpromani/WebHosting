<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Media;
use Illuminate\Support\Str;
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
            $data = Blog::with('blogImage')->select(['id', 'title', 'category', 'description', 'blog_image'])->latest()->get();

            return DataTables::of($data)
                ->editColumn('description', function ($data) {
                    $clean = strip_tags($data->description ?? '');
                    $clean = html_entity_decode($clean, ENT_QUOTES, 'UTF-8');
                    $clean = preg_replace('/\s+/', ' ', $clean);
                    return Str::limit(trim($clean), 90, '...');
                })
                ->addColumn('blog_image', function ($data) {
                    $url = $data->image_url;
                    return '<img src="' . $url . '" style="width:55px;height:55px;object-fit:cover;border-radius:8px;border:1px solid #e2e8f0;" alt="Blog Image" onerror="this.onerror=null;this.src=\'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800\';">';
                })
                ->addColumn('action', function ($data) {
                    return '
                <div class="d-flex align-items-center gap-1">
                    <a href="' . route('admin.blog.edit', $data->id) . '" class="btn btn-sm btn-primary" title="Edit"><i class="fa-solid fa-pen"></i></a>
                    <button class="btn btn-sm btn-danger delete-blog" data-id="' . $data->id . '" title="Delete"><i class="nav-icon fa-solid fa-trash"></i></button>
                </div>
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
        $categories = Blog::withoutGlobalScopes()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->pluck('category');
        return view('admin.blog.createBlog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'slug' => 'nullable|string',
            'category' => 'nullable|string',
            'description' => 'required',
            'blog_image' => 'required|image',
            'tags' => 'nullable|string',
            'focus_keywords' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $slugValue = !empty($request->slug) 
            ? Str::slug($request->slug) 
            : Str::slug(strtok($request->title ?? '', "\r\n"));

        $payload = [
            'title' => $request->title,
            'slug' => $slugValue,
            'category' => $request->category,
            'description' => $request->description,
            'tags' => $request->tags,
            'focus_keywords' => $request->focus_keywords,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ];

        $data = Blog::create($payload);

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
        $categories = Blog::withoutGlobalScopes()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->pluck('category');
        return view('admin.blog.createBlog', compact('editBlog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'nullable|string',
            'category' => 'nullable|string',
            'description' => 'required',
            'blog_image' => 'nullable|image', 
            'tags' => 'nullable|string',
            'focus_keywords' => 'nullable|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $blog = Blog::find($id);

        $slugValue = !empty($request->slug) 
            ? Str::slug($request->slug) 
            : Str::slug(strtok($request->title ?? '', "\r\n"));

        $payload = [
            'title' => $request->title,
            'slug' => $slugValue,
            'category' => $request->category,
            'description' => $request->description,
            'tags' => $request->tags,
            'focus_keywords' => $request->focus_keywords,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ];

        $blog->update($payload);

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
