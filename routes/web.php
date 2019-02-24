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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('/products')->group(function () {

    Route::get('/', 'Product\ProductController@index')->name('products');
    Route::get('/edit', 'Product\ProductController@edit')->name('edit_product');
    Route::post('/update', 'Product\ProductController@update')->name('update_product');
    Route::get('/create', 'Product\ProductController@create')->name('create_product');
    Route::post('/store', 'Product\ProductController@store')->name('store_product');
    Route::get('/delete/{id}', 'Product\ProductController@destroy')->name('delete_product');
    Route::get('/show/{id}', 'Product\ProductController@show')->name('show_product');

});
