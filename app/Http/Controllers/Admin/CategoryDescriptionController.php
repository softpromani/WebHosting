<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryDescriptionServiceRequest;
use App\Models\CategoryDescription;
use App\Models\CategoryDescriptionService;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CategoryDescriptionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $menu_cat = Menu::select(['id', 'name', 'created_at'])
                        ->whereNotNull('parent_id')
                        ->get();


            return DataTables::of($menu_cat)
                ->addColumn('action', function ($menu_cat) {
                    return '<a href="' . route('admin.category-description.edit', $menu_cat->id) . '" class="btn btn-sm btn-primary">Edit</a>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.category-description.index');
    }
    public function edit(string $id)
    {
        // session()->put('category_id', $id);
        $category = Menu::where('id', $id)->first();
        $descriptioncat = CategoryDescription::where('category_id',$id)->first();
        return view('admin.category-description.edit',compact('category','descriptioncat'));
    }
    public function update(Request $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Find the category (menu) record
        $menucat = Menu::findOrFail($id);

        // Try to find existing CategoryDescription with category_id
        $categoryDescription = CategoryDescription::where('category_id', $menucat->id)->first();

        // If not found, create a new instance
        if (!$categoryDescription) {
            $categoryDescription = new CategoryDescription();
            $categoryDescription->category_id = $menucat->id;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if (!empty($categoryDescription->image) && Storage::exists('public/' . $categoryDescription->image)) {
                Storage::delete('public/' . $categoryDescription->image);
            }

            // Store new image
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/category_descriptions', $imageName);
            $categoryDescription->image = 'category_descriptions/' . $imageName;
        }

        // Update text fields
        $categoryDescription->title = $request->input('title') ?? '';
        $categoryDescription->description = $request->input('description') ?? '';

        // Save the model (either create or update)
        $categoryDescription->save();

        toast('Category description updated successfully', 'success');
        return redirect()->back();
    }

    public function catDescService()
    {
        $categories = CategoryDescription::get();
        $services = CategoryDescriptionService::with('category')->get();
        return view('admin.category-description.cat_desc_service', compact('categories','services'));
    }
   public function catDescServiceSave(CategoryDescriptionServiceRequest $request)
    {
        $menu = Menu::findOrFail($request->category_id);

        $catDescService = new CategoryDescriptionService();
        $catDescService->category_id = $menu->id;

        if ($request->hasFile('service_image')) {
            $imageName = time() . '_' . $request->file('service_image')->getClientOriginalName();
            $request->file('service_image')->storeAs('public/cat_desc_services', $imageName);
            $catDescService->service_image = 'cat_desc_services/' . $imageName;
        }

        $catDescService->tab_name = $request->tab_name;
        $catDescService->tab_icon = $request->tab_icon;
        $catDescService->header_icon = $request->header_icon;
        $catDescService->header_text = $request->header_text;
        $catDescService->title = $request->title;
        $catDescService->description = $request->description ?? '';

        $catDescService->save();

        toast('Category description service saved successfully', 'success');
        return redirect()->back();
    }

    public function catDesServiceEdit($id)
    {

        $service = CategoryDescriptionService::findOrFail($id);
        $categories = CategoryDescription::all();
        $services = CategoryDescriptionService::with('category')->get();
        return view('admin.category-description.cat_desc_service', compact('service', 'categories', 'services'));
    }

    public function catDesServiceDelete($id)
    {
        $service = CategoryDescriptionService::findOrFail($id);
        if ($service->service_image && file_exists(public_path('uploads/service_images/' . $service->service_image))) {
            unlink(public_path('uploads/service_images/' . $service->service_image));
        }
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully');
    }

    public function catDesServiceUpdate(CategoryDescriptionServiceRequest $request, $id)
    {
        $menu = Menu::findOrFail($request->category_id);

        $catDescService = CategoryDescriptionService::findOrFail($id);
        $catDescService->category_id = $menu->id;

        if ($request->hasFile('service_image')) {
            // Optional: delete old image if exists
            if ($catDescService->service_image && Storage::exists('public/' . $catDescService->service_image)) {
                Storage::delete('public/' . $catDescService->service_image);
            }

            $imageName = time() . '_' . $request->file('service_image')->getClientOriginalName();
            $request->file('service_image')->storeAs('public/cat_desc_services', $imageName);
            $catDescService->service_image = 'cat_desc_services/' . $imageName;
        }

        $catDescService->tab_name = $request->tab_name;
        $catDescService->tab_icon = $request->tab_icon;
        $catDescService->header_icon = $request->header_icon;
        $catDescService->header_text = $request->header_text;
        $catDescService->title = $request->title;
        $catDescService->description = $request->description ?? '';

        $catDescService->save();

        toast('Category description service updated successfully', 'success');
        return redirect()->back();
    }



}
