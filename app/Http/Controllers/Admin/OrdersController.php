<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

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
        return view("admin.orders.index", compact('orders'));
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
        $order->status = 1;
        $order->is_returned = 0;
        $order->is_text = NULL;
        $order->save();


        return redirect()->back();
    }

     public function returnProduct(Request $request) {

       $request = $request->all();


        $order = Order::where('id', '=', $request['id'])->first();
        $order->is_returned = 1;
        $order->status = 0;
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
    public function show($user_id)
    {

       // $shops = Shops::with(['products'])->withCount('products')->where('user_id', '=', $user_id)->get();
        return view('admin.orders.index',compact('shops'));
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


        $order = Order::find($id);
        $order->status = 1;
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

        $order = Order::find($id);
        if($order->delete()) return redirect()->back();
    }

}
