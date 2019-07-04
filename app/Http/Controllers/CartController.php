<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add_cart(Request $request)
    {

        // Session::forget('cart');

        $product = Product::find($request->id);
        // dd(Session('cart'));

        if (Session::has('cart')) {
            foreach (Session('cart') as $crt) {
                if ($product->id == $crt['id']) {
                    $crt->qty++;
                    return back();
                }
            }

            $product->qty = 1;
            Session::push('cart', $product);
            return back();

        } else {
            Session::put('cart', []);
            $product->qty = 1;
            Session::push('cart', $product);
            return back();
        }
    }

    public function cart_delete()
    {
        Session::forget('cart');
        return back();
    }
}
