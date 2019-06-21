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

Route::get('/', 'StoreController@index');
Route::get('/product', 'StoreController@product');
Route::get('/aboute', 'StoreController@aboute');

Auth::routes();

Route::get('/dashboard', 'AdminController@index');

Route::prefix('/dashboard')->group(function(){
    Route::resource("/product", "Admin\ProductController");
    Route::resource('/pages', 'Admin\PageController');
    Route::get('/tabel', 'AdminController@tabel');
    Route::get('/toko', 'AdminController@toko');
    Route::get('/diskon', 'AdminController@diskon');
});


