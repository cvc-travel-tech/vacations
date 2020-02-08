<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    //
    public function Login()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        // return view('admin.login');
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('backend');
        } else {
            session()->flash('error', trans('test'));
            return redirect('backend/login');
        }
    }

    public function Logout(Request $request)
    {
        auth()->guard('admin')->logout();
        return redirect('backend');
    }
}
