<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::orderBy("id", "DESC")->paginate(10);
        return view("dashboard.Products.a_product", compact('products'));
    }
    public function tabel()
    {
        return view( 'dashboard.Products.a_tabel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_categories = Categorie::all();
        return view("dashboard.Products.a_product_create", compact('list_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->code = $request->input("code_product");
        $product->name =  $request->input("nama_product");
        $product->varian =  $request->input("varian");
        $product->price =  $request->input("price");
        $product->stock =  $request->input("stock");
        $product->categorie_id  = $request->input("categorie_id");
        // $product->file =  $request->input("file");
        $product->save();
        Session::flash("success", "berhasil Menambah Product");
        return redirect()->to("dashboard/product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        return view('store.product_detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view( "dashboard.Products.a_product_edit", compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->code = $request->input("code_product");
        $product->name =  $request->input("nama_product");
        $product->varian =  $request->input("varian");
        $product->price =  $request->input("price");
        $product->stock =  $request->input("stock"); 
        $product->save() ;
        Session::flash("success", "berhasil Update Prodduct");
        return redirect()->to("dashboard/product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        Session::flash("success", "berhasil Menghapus Product");
        return redirect()->to("dashboard/product"); 
    }
}
