<?php

namespace App\Http\Controllers;
use App\Categorie;

use Illuminate\Http\Request;
use App\Product;
use App\Store;

class StoreController extends Controller
{   
    public function index()
    {
        $list_categories = Categorie::all();
        return view("store.store", compact('list_categories'));
    }

    public function product()
    {
        $product = Product::All();
        return view('store.product', compact('product'));
    }

    public function aboute()
    {
        return view('store.aboute');
    }
    // `public function show($id)
    // {
    //     $product = Store::find($id);
    //     return view('store.product_detail', compact('product'));
    // }`
}
