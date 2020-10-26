<?php

namespace App\Http\Controllers\Admin;

use App\Shops;
use App\User;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $shops = Shops::with(['products'])->withCount('products')->get();
        return view("admin.shops.index", compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("admin.shops.create");
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


        $prod = Shops::add($request->all());

        $this->validate($request, [
            'title' =>'required',
	          'phone' => 'required',
	          'address' => 'required',
        ]);

        $prod->uploadImage($request->file('img'));

        return redirect()->route('shops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {

        $shops = Shops::with(['products'])->withCount('products')->where('user_id', '=', $user_id)->get();
        return view('admin.shops.index',compact('shops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $sl = Shops::where([
            ['id', '=', $id],
        ])->first();

        if( $sl ) 
           return view('admin.shops.edit',compact('sl'));
        else 
           return $this->index();
    }


    public function shopshow(Request $request)
    {

        $products = Product::where('shop_id', '=', $request->get('id'))->get();
        return view('admin.shops.shop',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shops  $shops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'title' =>'required',
        ]);

        $post = Shops::find($id);
        $post->edit($request->all());
        $post->uploadImage($request->file('img'));


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
        //

        $product = Product::where('shop_id', '=', $id)->get();

        $shop = Shops::find($id);

        if($product->count() > 0) {
            return redirect()->route('shops.index');
        }


        if($shop->img != null){
            Storage::delete('/uploads/shops/' . $product->img);
        }
        $shop->delete();
        return redirect()->route('shops.index');
    }
}
