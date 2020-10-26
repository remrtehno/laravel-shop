<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use App\Order;
use App\Shops;
use App\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::all();
        $invoces = Invoice::all();
        
        $shops = Shops::all();
        
        return view("admin.orders.index", compact('orders', 'shops','invoces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.orders.create");
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
        $this->validate($request, [
            'title' =>'required',
        ]);

        //$prod = Shops::add($request->all());
        return redirect()->route('orders.index');
    }

    public function cahngeStatus(Request $request) {



       $id = $request->all()['id'];


        //

        $order = Order::where('id', '=', $id)->first();
        $order->payment_status = 1;
        $order->is_returned = 0;
        $order->is_text = NULL;
        $order->save();


        return redirect()->back();
    }

     public function returnProduct(Request $request) {

       $request = $request->all();


        $order = Order::where('id', '=', $request['id'])->first();
        $order->is_returned = 1;
        $order->payment_status = 0;
        $order->is_text = $request['is_text'];
        $order->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

	    $orders = Order::where('invoice_id', '=', $id)->get();
	    
	    $invoice = Invoice::find($id);
	    
        return view('admin.orders.detail',compact('orders', 'invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {


        return view('admin.orders.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status = $request->all();
	      DB::table('orders')->where('invoice_id', '=', $id)->update(array('status' => 1));
        
        $order = Invoice::find($id);
        $order->payment_status = 1;
        $order->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $order = Invoice::find($id);
	      Order::where('invoice_id', '=', $id)->delete();
	      
        if($order->delete()) return redirect()->back();
    }

}
