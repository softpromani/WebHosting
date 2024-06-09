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
        return view('admin.webSetting.websetting',compact('webSettings'));
    }
}
