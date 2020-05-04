<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('admin.index');
// });


Route::group(['prefix'=>'admin'] , function(){
    Route::get('/','AdminOrderController@index')->name('admin.dashboard');

    Route::group(['prefix' => 'product'], function () {
        Route::get('/','AdminProductController@index')->name('admin.product');
        Route::get('/show/{category}','AdminProductController@index_by_kategory')->name('product.bycategory');
        Route::get('/show/{size}','AdminProductController@index_by_size')->name('product.bysize');
        Route::get('/add','AdminProductController@create')->name('admin.addproduct');
        Route::post('/add','AdminProductController@store')->name('addproduct.store');
        Route::get('/{id}/edit','AdminProductController@edit')->name('editproduct.edit');
        Route::post('/{id}/update','AdminProductController@update')->name('updateproduct.update');
        Route::get('/{id}/delete','AdminProductController@destroy')->name('deleteproduct.delete');
    });

    Route::group(['prefix' => 'order'], function () {
        Route::get('/','AdminOrderController@order')->name('admin.order');
    });
});
