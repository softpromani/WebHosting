<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebSetting;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{
    public function webSetting()
    {
        $webSettings = WebSetting::all()->groupBy('group');

        return view('admin.webSetting.websetting', compact('webSettings'));
    }

   public function updateWebSettings(Request $request)
    {
        foreach ($request->settings as $key => $value) {
           
            if ($request->hasFile("settings.$key")) {
                
                $file = $request->file("settings.$key");
                $path = $file->store('uploads/setting', 'public'); 

                WebSetting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $path]
                );
            } else {
                WebSetting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }


    }
