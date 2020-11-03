<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Gallery;
use App\Invoice;
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


class Basket extends Controller {
	public function index() {
		
		
		$title     = "";
		$meta_key  = "";
		$meta_desc = "";
		
		return view( "cart.index", compact( 'title', 'meta_key', 'meta_desc' ) );
	}
	
	
	public function addToCart( $id ) {
		$product = Product::find( $id );
		
		$price = 0;
		if ( $product->price ) {
			$price = trim( preg_replace( '/\,/', '', $product->price ) );
		}
		
		Cart::add( $product->id, $product->title, 1, $price );
		
		if(app()->getLocale() == 'ru') {
            return redirect('cart');
        } else {
            return redirect(app()->getLocale().'/cart');
        }
	}
	
	public function removeProductFromCart( $productId ) {
		
		Cart::remove( $productId );
		
		if(app()->getLocale() == 'ru') {
            return redirect('cart');
        } else {
            return redirect(app()->getLocale().'/cart');
        }
	}
	
	# Our function for clearing all items from our cart
	public function destroyCart() {
		Cart::destroy();
		
		return redirect( '/' );
	}
	
	public function update( Request $reques, $id ) {
		
		$quantity = $reques->all();
		
		Cart::update( $id, (int) $quantity['quantity'] );
		
		if(app()->getLocale() == 'ru') {
            return redirect('cart');
        } else {
            return redirect(app()->getLocale().'/cart');
        }
	}
	
	
	public function order( Request $request ) {
		
		$title     = "";
		$meta_key  = "";
		$meta_desc = "";
		
		$delivery = News::find( 1 );
		
		return view( "checkout.index", compact( 'title', 'meta_key', 'meta_desc', 'delivery' ) );
	}
	
	public function makeOrder( Request $request ) {
		
		
		$meta = serialize( $request->all() );
		
		$invoice                 = new Invoice();
		$invoice->price          = $request->input( 'total' );
		$invoice->currency       = "Сум";
		$invoice->customer_email = $request->input( 'email_customer' );
		$invoice->customer_id    = Auth::check() ? Auth::user()->id : 0;
		$invoice->country_code   = $request->input( 'email_customer' );
		$invoice->payment_id     = 0;
		$invoice->payment_status = 'Ожидает';
		$invoice->save();
		
		
		foreach ( Cart::content() as $id => $item ) {
			
			$prod = Product::find( $item->id );//вызываем товар по id
			
			$order = Order::create( [
				
				'tovar_name'  => $prod->title,
				'tovar_price' => $prod->price ? $prod->price : 0,
				'tovar_id'    => $prod->id,
				'status'      => 'Ожидает',
				'user_id'     => Auth::check() ? Auth::user()->id : 0,
				'shop_id'     => $prod->shop_id,
				'meta'        => $meta,
				'qty'         => $item->qty,
				'invoice_id'  => $invoice->getKey(),
			] );
			
			$order->save();
			
		};
		
		Cart::destroy();
		
		if ( Auth::check() ) {
			if(app()->getLocale() == 'ru') {
            return redirect('orders');
        } else {
            return redirect(app()->getLocale().'/orders');
        }

		}

		if(app()->getLocale() == 'ru') {
            return redirect('/');
        } else {
            return redirect(app()->getLocale().'/');
        }
		

		
	}
	
}
