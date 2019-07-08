<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    public function addCart(Request $request)
    {

        $qty = $request->qty;
        $product_id = $request->id;
        $product = Product::find($product_id);

        if ($request->qty == null) {
            $qty = 1;
        }


        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $userCart =  Cart::where([ ['user_id', $user_id],['product_id', $product_id] ])->first();
            // dd($userCart);

            if ($userCart) {
                $userCart->qty = $userCart->qty + $qty;
                $userCart->save();
            } else {
                $cart = new Cart;
                $cart->user_id = $user_id;
                $cart->product_id = $product_id;
                $cart->qty = $qty;
                $cart->save();
            }

            return redirect(url('cart'));
        } else {
            if (Session::has('cart')) {
                foreach (Session('cart') as $crt) {
                    if ($product->id == $crt['id']) {
                        $crt->qty = $crt->qty + $qty;
                        return back();
                    }
                }

                $product->qty = $qty;
                Session::push('cart', $product);
            } else {
                Session::put('cart', []);
                $product->qty = $qty;
                Session::push('cart', $product);
            }

            return redirect(url('cart'));
        }
    }

    public function deleteCart($id)
    {
        // dd($id);
        if (Auth::check()){
            $user_id = Auth::user()->id;
            $cart_user = Cart::where('user_id', $user_id)->get();
            foreach ($cart_user as $crt){
                if($crt->product_id == $id){
                    $crt->delete();
                }
            }
            if (!Session('cart') == null){
                $cart_sesion = Session('cart');
                foreach ($cart_sesion as $crt){
                    if($crt->id == $id){
                        $crt->delete();
                    }
                }
            }
        } else {
            $cart_sesion = Session('cart');
            foreach ($cart_sesion as $crt){
                if($crt->id == $id){
                    $crt->delete();
                }
            }
        }

        return back();
    }

    public static function deleteAllCart()
    {
        if (Auth::check()){
            $user_id = Auth::user()->id;
            $cart_user = Cart::where('user_id', $user_id)->delete();
            Session::forget('cart');
        } else {
            Session::forget('cart');
        }


        return back();
    }
}
