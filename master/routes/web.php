<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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

// Route::get('/blalalalala', function () {
//     return view('customer.successpayment');
// });
Route::get('/','LandingController@index')->name('landing.index');
Route::get('/product','AllProductController@index')->name('allproduct.index');
Route::get('/onsale','OnSaleController@index')->name('onsale.index');
Route::get('/clearancesell','ClearanceSellController@index')->name('clearancesell.index');
Route::get('/product/{product}','AllProductController@show')->name('product.show');
Route::get('/search','AllProductController@search')->name('consumenproduct.search');

Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}','CartController@update')->name('cart.update');

Route::get('/checkout','CheckoutController@index')->name('checkout.index');

Route::get('/getCities/{id}','CheckoutController@getCities');

Route::post('/checkout','CheckoutController@store')->name('checkout.store');
Route::get('/checkout/success','CheckoutController@coba');

Route::get('empty', function(){
    Cart::destroy();
});


Route::group(['prefix'=>'adminfootballbadboys'] , function(){
    Route::get('/','AdminOrderController@index')->name('admin.dashboard');

    Route::group(['prefix' => 'account'], function () {
        Route::get('/password','AdminAccountController@index')->name('password.index');
        Route::post('/password','AdminAccountController@changePassword')->name('password.changePassword');
    }); 

    Route::group(['prefix' => 'product'], function () {
        Route::get('/','AdminProductController@index')->name('admin.product');
        Route::get('/add','AdminProductController@create')->name('admin.addproduct');
        Route::post('/add','AdminProductController@store')->name('addproduct.store');
        Route::get('/{id}/edit','AdminProductController@edit')->name('editproduct.edit');
        Route::post('/{id}/update','AdminProductController@update')->name('updateproduct.update');
        Route::get('/{id}/delete','AdminProductController@destroy')->name('deleteproduct.delete');
        Route::get('/search','AdminProductController@search')->name('product.search');
        Route::get('/{product}/show','AdminProductController@show')->name('adminproduct.show');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/','AdminCategoryController@index')->name('category.index');
            Route::post('/add','AdminCategoryController@store')->name('addcategory.store');
            Route::get('/{id}/delete','AdminCategoryController@destroy')->name('category.destroy');
        });

        Route::group(['prefix' => 'discount'], function () {
            Route::get('/','AdminDiscountController@index')->name('discount.index');
        });

        Route::group(['prefix' => 'clearancesell'], function () {
            Route::get('/','AdminClearanceSellController@index')->name('adminclearancesell.index');
        });

        Route::group(['prefix' => 'promotion'], function () {
            Route::get('/contentpromotion','AdminPromotionController@ContentPromotion')->name('admin.contentpromotion');
            Route::post('/contentpromotion/{id}/update','AdminPromotionController@update')->name('contentpromotion.update');
            Route::get('/banner','AdminPromotionController@banner')->name('admin.banner');
            Route::post('/banner/{id}/update','AdminPromotionController@bannerupdate')->name('banner.update');
        });
    });

    Route::group(['prefix' => 'order'], function () {
        Route::get('/','AdminOrderController@order')->name('admin.order');
        Route::post('/{id}/order','AdminOrderController@dikirim')->name('order.dikirim');
        Route::get('/{id}/delete','AdminOrderController@destroy')->name('order.delete');
        Route::get('/export_excel','AdminOrderController@export_excel')->name('admin.export_excel');
    });
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
