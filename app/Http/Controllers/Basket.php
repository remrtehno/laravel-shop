<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Gallery;
use App\Logo;
use App\News;
use App\ProdCat;
use App\Product;
use App\Slider;
use App\Userwrap;
use App\Video;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use Auth;
use Session;


class Basket extends Controller
{
    public function index(){


        $title = "";
        $meta_key = "";
        $meta_desc = "";
        return view("cart.index",compact('title','meta_key','meta_desc'));
    }


    public function addToCart($id)
    {
        $product = Product::find($id);

        $price = 0;
        if($product->price) $price = $product->price; 

        Cart::add($product->id, $product->title, 1, $price);
        return redirect('/cart');
    }

	public function removeProductFromCart($productId)
    {

      Cart::remove($productId);
      return redirect('/cart');
    }

    # Our function for clearing all items from our cart
    public function destroyCart()
    {
        Cart::destroy();
        return redirect('/');
    }

    public function update(Request $reques, $id) {

    	$quantity = $reques->all();

    	Cart::update($id,  (int)$quantity['quantity']);

    	return redirect('/cart');
    }




    public function order(Request $request){
	
        $title = "";
        $meta_key = "";
        $meta_desc = "";
        
        return view("checkout.index",compact('title','meta_key','meta_desc'));
    }

    public function makeOrder(Request $request) {


        $meta = serialize($request->all());


        foreach(Cart::content() as $id => $item){
            
            $prod = Product::find($item->id);//вызываем товар по id

            $order = Order::create([
                
                'tovar_name'=>$prod->title,
                'tovar_price'=>$prod->price ? $prod->price : 0 ,
                'tovar_id'=>$prod->id,
                'status' => 'Ожидает',
                'user_id'=> Auth::check() ? Auth::user()->id : 0,
                'shop_id' => $prod->shop_id,
                'meta'    => $meta,
                ]);
            
                $order->save();

        };

        Cart::destroy();
        
        if(Auth::check()) return redirect('/orders');
        return redirect('/');
         
    }

}