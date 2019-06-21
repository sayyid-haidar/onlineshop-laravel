<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view("dashboard.a_product", compact('products'));
    }
    public function tabel()
    {
        return view('dashboard.a_tabel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.a_product_create');
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
        // $product->file =  $request->input("file");
        $product->save();
        return redirect()->to("dashboard/product/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'ini function show';
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
        return view("dashboard.a_product_edit", compact('product'));
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
        return redirect()->to("dashboard/product"); 
    }
}
