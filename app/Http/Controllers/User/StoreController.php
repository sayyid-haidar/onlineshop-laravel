<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Template;
use App\Categorie;
use App\Cart;
use Session;

class StoreController extends Controller
{

    public function __construct()
    {
        $this->template = Template::where("selected", '1')->first();
        View::share('categories', Categorie::get());
    }


    public function index()
    {
        $product = Product::All();
        return view('templates.' . $this->template->folder . '.index', compact('product'));
    }

    public function product()
    {
        $product = Product::All();
        return view('templates.' . $this->template->folder . '.product', compact('product'));
    }

    public function about()
    {
        return view('templates.' . $this->template->folder . '.about');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function cartView()
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $cart_user = Cart::where('user_id', $user_id)->get();
        } else {
            $cart_user = [];
        }


        $cartSession = Session('cart');
        return view('templates.' . $this->template->folder . '.cart', compact('cartSession', 'cart_user'));
    }


    public function checkout()
    {
        return view('templates.' . $this->template->folder . '.checkout');
    }
    public function detail($id)
    {
        $detail = Product::find($id);
        return view('templates.' . $this->template->folder . '.product_detail', compact('detail'));
    }
}
