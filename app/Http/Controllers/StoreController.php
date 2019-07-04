<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Product;
use App\Template;
use App\Categorie;
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

    public function aboute()
    {
        return view('templates.' . $this->template->folder . '.about');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('templates.' . $this->template->folder . '.contact');
    }


    public function cart()
    {
        $carts = Session('cart');
        return view('templates.' . $this->template->folder . '.cart', compact('carts'));
    }

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
