<?php

namespace App\Http\Controllers;

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addCart(Request $request, $id)
    {
        $cart = [1,2];
        $request->session()->push('cart', $cart);

        return back();
    }
}
