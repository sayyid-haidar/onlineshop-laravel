<?php

namespace App\Http\Controllers;

use App\Categorie;

use Illuminate\Http\Request;
use App\Product;
use App\Store;
use DB;
use Session;

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
    public function search(Request $request)
    {
        $search = $request->get('search');
        if ($search != null) {
            $product = DB::table('products')
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('varian', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%')->get();
            return view('store.product', compact('product'));
        } else {
            $product = DB::table('products')->where('name', 'like', '%' . $search . '%')
                ->orWhere('varian', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%')->get();
            Session::flash("error", "Data not Found!");
            return view('store.product', compact('product'));
        }
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
