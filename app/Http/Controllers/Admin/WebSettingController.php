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
    function updateWebSettings(Request $request)
    {
        $settings = $request->input('settings', []);
        // dd($settings);
        foreach ($settings as $key => $value) {
            WebSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toast('Web Settings updated successfully', 'success');
        return redirect()->back();
    }
}
