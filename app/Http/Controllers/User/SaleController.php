<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\User\CartController;
use App\Costumer;
use App\Sale;
use App\Cart;


class SaleController extends Controller
{
    public function addCostumer(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
        ]);

        (Auth::check()) ? $user_id = Auth::user()->id : $user_id = 0;

        $costumer = new Costumer;
        $costumer->user_id = $user_id;
        $costumer->nama = $request->input('nama');
        $costumer->email = $request->input('email');
        $costumer->phone = $request->input('phone');
        $costumer->alamat = $request->input('alamat');
        $costumer->save();

        if(Auth::check()){
            $carts = Cart::where('user_id', $user_id)->get();
            // dd($carts);
            foreach ($carts as $crt) {
                $sale = new Sale;
                $sale->costumer_id = $costumer->user_id;
                $sale->product_id = $crt->product_id;
                $sale->qty = $crt->qty;
                $sale->save();
            }
        } else {
            $carts = Session('carts');
            foreach ($carts as $crt) {
                $sale = new Sale;
                $sale->costumer_id = $costumer->user_id;
                $sale->product_id = $crt->id;
                $sale->qty = $crt->qty;
                $sale->save();
            }
        }

        CartController::deleteAllCart();


        return redirect(url('/pembayaran'));
    }
}
