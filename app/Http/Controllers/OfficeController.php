<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function OfficeDashboard()
    {
        return view('office.office_dashboard');
    }
}
