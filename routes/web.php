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
Route::get('/products', 'StoreController@product');
Route::get('/product/{id}', 'StoreController@detail');
Route::post('/product/cart/add/', 'StoreController@add_cart');
Route::get('/aboute', 'StoreController@aboute');
Route::get('/contact', 'StoreController@contact');
Route::get('/cart', 'StoreController@cart');
Route::get('/checkout', 'StoreController@checkout');

Route::get('/cart/delete', 'CartController@cart_delete');
Route::get('/product/search', 'CartController@search');

Auth::routes();


Route::prefix('/dashboard')->group(function () {
    Route::resource("/product", "Admin\ProductController");
    Route::resource("/categorie", "Admin\CategorieController");
    Route::resource('/pages', 'Admin\PageController');
    Route::resource('/template', 'Admin\TemplateController');

    Route::get('/', 'AdminController@index');
    Route::get('/template-edit', 'TemplateController@edit');
    Route::get('/create', 'TemplateController@create');
    Route::get('/insert-insert', 'TemplateController@store');

    Route::get("/template", "Admin\TemplateController@index");
    Route::get('/template/{id}/select', 'Admin\TemplateController@select');
    Route::post('/template/{id}/edit', 'TemplateController@edit');
    Route::post('/template/{id}/edit', 'TemplateController@edit');
});

Route::prefix('/user')->group(function(){
    Route::get('/', 'User\UserBoardController@index');
    Route::get('/wishlist', 'User\UserBoardController@index');
    Route::get('/pembelian', 'User\UserBoardController@index');
    Route::get('/transaksi', 'User\UserBoardController@index');
    Route::get('/pengaturan', 'User\UserBoardController@index');
});
