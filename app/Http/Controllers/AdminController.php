<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');

    } // End Method

    public function AdminLogin()
    {
        return view('admin.admin.login');
    }
}
