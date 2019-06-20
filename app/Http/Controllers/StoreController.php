<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('store.store');
    }

    public function product()
    {
        return view('store.product');
    }

    public function aboute()
    {
        return view('store.aboute');
    }
}
