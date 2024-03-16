<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('web-admin/pages/dashboard.dashboard');
    }
}
