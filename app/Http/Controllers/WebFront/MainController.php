<?php

namespace App\Http\Controllers\WebFront;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('web-front/pages.main');
    }
}
