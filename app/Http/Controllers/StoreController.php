<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('store');
    }

    public function product()
    {
        return view('product');
    }

    public function aboute()
    {
        return view('aboute');
    }
}
