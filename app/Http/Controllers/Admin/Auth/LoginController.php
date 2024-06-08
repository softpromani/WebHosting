<?php

namespace App\Http\Controllers\Admin\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function loginStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
            $user = Auth::user()->first_name .'' . Auth::user()->last_name;
            toast('Welcome '  . $user, 'success');
            return redirect()->route('admin.dashboard');
            
        } else {
            toast('Invalid Username or Password!', 'error');
            return redirect('/login');
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');

    }

    function updatePassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'cnew_password' => 'required'
        ]);
        try {
            if ($request->new_password == $request->cnew_password) {

                if (Hash::check($request->current_password, Auth::user()->password)) {
                    $res = User::find(Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);
                    if ($res) {
                        toast('Password changed Sucessfully','success');
                        return redirect()->back();
                    } else {
                        toast('Password not changed','error');
                        return redirect()->back();
                    }
                } else {
                    toast('Incorrect current password','error');
                    return redirect()->back();
                }
            } else {
                toast('Password did not matched','error');
                return redirect()->back();
            }
        } catch (Exception $ex) {
            $url = URL::current();
            toast('Server Error','error');
        }
        return redirect()->back();
    }
}
