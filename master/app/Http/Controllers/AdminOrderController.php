<?php

namespace App\Http\Controllers;
use App\Order;
use Carbon\Carbon;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::whereDate('created_at', Carbon::today())->orderBy('id', 'DESC')->get();

        return view('admin.index', compact('orders'));
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
        //
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
        $order = Order::findOrFail($id);

        $order->products()->detach();

        $order->delete();

        return back()->with('danger', 'Order berhasil dihapus!');
    }

    public function order()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(10);

        return view('admin.order', compact('orders'));
    }

    public function dikirim(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->name = $request->name?$request->name : $order->name;
        $order->email = $request->email?$request->email : $order->email;
        $order->phone = $request->phone?$request->phone : $order->phone;
        $order->province = $request->province?$request->province : $order->province;
        $order->city = $request->city?$request->city : $order->city;
        $order->address = $request->address?$request->address : $order->address;
        $order->kodepos = $request->kodepos?$request->kodepos : $order->kodepos;
        $order->payment_method = $request->payment_method?$request->payment_method : $order->payment_method;
        $order->subtotal = $request->subtotal?$request->subtotal : $order->subtotal;
        $order->total_harga = $request->total_harga?$request->total_harga : $order->total_harga;
        if($order->shipped == 0){
            $order->shipped = true;
        } else {
            $order->shipped = false;
        }
        
        $order->update();

        return back()->with('success', 'Pengiriman di Update!');
    }

    public function export_excel()
	{
		return Excel::download(new OrderExport, 'order.xlsx');
	}
}
