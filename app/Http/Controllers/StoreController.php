<?php

namespace App\Http\Controllers;
use App\Categorie;

use Illuminate\Http\Request;

class StoreController extends Controller
{   
    public function index()
    {
        $list_categories = Categorie::all();
        return view("store.store", compact('list_categories'));
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
