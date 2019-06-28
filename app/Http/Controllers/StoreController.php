<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;
use App\Categorie;
use Illuminate\Support\Facades\Schema;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
=======

use App\Categorie;

use Illuminate\Http\Request;
use App\Product;
use App\Store;
use DB;
use Session;

class StoreController extends Controller
{
>>>>>>> dev
    public function index()
    {
        $list_categories = Categorie::all();
        return view("store.index", compact('list_categories'));
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
<<<<<<< HEAD

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('store.cart');
    }
=======
    // `public function show($id)
    // {
    //     $product = Store::find($id);
    //     return view('store.product_detail', compact('product'));
    // }`
>>>>>>> dev
}
