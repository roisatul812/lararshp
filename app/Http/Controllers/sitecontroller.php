<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function index()
    {
        return view('site.home');
    }
}
