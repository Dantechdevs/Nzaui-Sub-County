<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Models\User;


class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');

    } // End Method
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    } // End method


    public function AdminLogin()
    {
        return view('admin.admin_login');
    }
}
