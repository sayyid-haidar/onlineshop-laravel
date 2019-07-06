<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function product()
    {
        return view('dashboard.a_product');
    }

    public function tabel()
    {
        return view('dashboard.a_tabel');
    }

    public function toko()
    {
        return view('dashboard.a_toko');
    }

    public function diskon()
    {
        return view('dashboard.a_diskon');
    }
}
