<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Template;
use Session;


class StoreController extends Controller
{

    public function __construct()
    {
        $this->template = Template::where("selected", '1')->first();
    }
    public function index()
    {
        return view('templates.' . $this->template->folder . '.index');
    }

    public function product()
    {
        $product = Product::All();
        return view('templates.' . $this->template->folder . '.product', compact('product'));
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        if ($search != null) {
            $product = Product::get()
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('varian', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%')->get();
            return view('store.product', compact('product'));
        } else {
            $product = Product::get()
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('varian', 'like', '%' . $search . '%')
                ->orWhere('price', 'like', '%' . $search . '%')->get();
            Session::flash("error", "Data not Found!");
            return view('store.product', compact('product'));
        }
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
        return view('templates.' . $this->template->folder . '.cart');
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
