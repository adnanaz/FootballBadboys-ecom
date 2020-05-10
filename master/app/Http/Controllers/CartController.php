<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ContentPromotion;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
        $contentpromotion = ContentPromotion::findOrFail(1);

        return view('customer.cart', compact('categories', 'contentpromotion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = Cart::add($request->id, $request->name, 1, $request->price, ['size' => $request->size, 'color' => $request->color, 'image' => $request->image])
            ->associate('App\Product');
        
        return redirect()->route('cart.index')->with('success', 'Product Berhasil Ditambahkan ke Cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        Cart::update($id, $request->quantity);

        session()->flash('success','Jumlah berhasil diupdate!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success', 'Product Berhasil Dihapus dari cart!');;
    }
}
