<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', 'StoreController');
Route::post('/product/{id}', 'StoreController@addCart');
Route::get('/product', 'StoreController@product');
Route::get('/aboute', 'StoreController@aboute');
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/product/cart', 'StoreController@cart');
Route::get('/product/detail', function(){
=======
Route::get('/product/detail', function () {
>>>>>>> dev
    return view('store.product_detail');
});
=======
Route::get('/product/{id}', 'StoreController@detail')->name('product');
Route::get('/contact', 'StoreController@contact');
Route::get('/cart', 'StoreController@cart');
Route::get('/checkout', 'StoreController@checkout');

>>>>>>> dev
Route::get('/product/search', 'StoreController@search');
// Route::get('product/detail/$product->id', function () {
//     return view('store.product_detail');
// });

Auth::routes();

Route::get('/dashboard', 'AdminController@index');

Route::prefix('/dashboard')->group(function () {
    Route::resource("/product", "Admin\ProductController");
    Route::resource("/categorie", "Admin\CategorieController");
    Route::resource('/pages', 'Admin\PageController');
    Route::resource('/template', 'Admin\TemplateController');

    Route::get('/tabel', 'AdminController@tabel');
    Route::get('/toko', 'AdminController@toko');
    Route::get('/template-edit', 'TemplateController@edit');
    Route::get('/create', 'TemplateController@create');
    Route::get('/insert-insert', 'TemplateController@store');

    Route::get("/template", "Admin\TemplateController@index");
    Route::get('/template/{id}/select', 'Admin\TemplateController@select');
    Route::post('/template/{id}/edit', 'TemplateController@edit');
    Route::post('/template/{id}/edit', 'TemplateController@edit');
});
