<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ContentPromotion;
use App\Order;
use App\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Cart::content()->isEmpty()) {
            return redirect()->route('cart.index')->with('danger', 'Cart masih kosong, silahkan belanja terlebih dahulu sebelum checkout!');
        } else {
            $provinces = \Indonesia::allProvinces();
            $cities = \Indonesia::allCities();
            $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $contentpromotion = ContentPromotion::findOrFail(1);

            return view('customer.checkout', compact('categories', 'contentpromotion', 'provinces', 'cities'));
        }
    }

    public function getCities($id)
    {
        $cities= DB::table("indonesia_cities")
                    ->where("province_id",$id)
                    ->pluck("name","id");

        return response()->json($cities);
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
        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|max:200',
            'phone' => 'required|max:200',
            'province' => 'required|max:200',
            'city' => 'required|max:200',
            'address' => 'required',
            'kodepos' => 'required|max:10',
            'payment_method' => 'required',
        ]);      

        $order = new Order;
        
        if (Cart::content()->isEmpty()) {
            return redirect()->route('cart.index')->with('danger', 'Transaksi gagal karena cart sudah kosong, silahkan belanja kembali!');
        } else {
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

            $categories = Category::whereNotIn('id', [10, 12])->orderBy('id', 'DESC')->get();
            $contentpromotion = ContentPromotion::findOrFail(1);

            Cart::destroy();
            return view('customer.successpayment', compact('categories', 'contentpromotion'));
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
