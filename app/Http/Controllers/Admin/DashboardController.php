<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function free_trial_applies(Request $request)
    {
        if(request()->ajax()) {
            $data = \App\Models\FreeTrailApply::select(['id', 'name', 'email', 'phone_number', 'business_name', 'application_detail', 'license_key', 'number_users', 'username', 'aditional_comment', 'agreement']);
            return $data->make(true);
        }
        $free_trial_applies = \App\Models\FreeTrailApply::orderBy('id', 'desc')->get();
        return view('admin.free_trial_applies.index', compact('free_trial_applies'));
    }
}
