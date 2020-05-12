<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ContentPromotion;
use App\Order;
use App\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
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

        return view('customer.checkout', compact('categories', 'contentpromotion'));
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

        $order = new Order;

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->province = $request->province;
        $order->city = $request->city;
        $order->address = $request->address;
        $order->kodepos = $request->kodepos;
        $order->payment_method = $request->payment_method;
        $order->subtotal = Cart::subtotal();
        $order->total_harga = Cart::total();
        
        $order->save();

        foreach (Cart::content() as $item) {
            $items = OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
                'size' => $item->options->size,
                'color' => $item->options->color
            ]);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
