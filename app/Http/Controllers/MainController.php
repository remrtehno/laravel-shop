<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Gallery;
use App\Logo;
use App\Shops;
use App\News;
use App\ProdCat;
use App\Product;
use App\Slider;
use App\Userwrap;
use App\Video;
use Auth;
use App\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class MainController extends Controller
{
    public function index(){

        $slider =  Slider::getSlider();
        $userwrap = []; // Product::all()->random(3);
        $about = About::getAbout();
        $gallery = Gallery::limit(8)->get();
        $news = News::getNews();
        $products = Product::limit(6)->get();
        $productsHits = Product::where('is_hits', 1)->skip(0)->take(6)->get();
        $productsSale = Product::where('is_sale', 1)->skip(0)->take(6)->get();
        $video = Video::limit(8)->get();
        $product_cats = ProdCat::all();
	
	    $title = "integ.uz, стройматериалы, в Ташкенте Узбекистан, лучшие товары по низким ценам, Нужны стройматериалы? Покупай у Integ.uz, экономь с нами";
	    $meta_desc = "Если вам нужны стройматериалы,то integ.uz предлагает стройматериалы высокого качества в Ташкенте и по Узбекистану,у нас самые низкие цены в Ташкенте.Купить стройматериалы
         в Ташкенте по низким ценам,только у нас самые низкие цены на
        стройматериалы";
	    $meta_key = "стройматериалы,шпатель,разбавитель, краска, лакокраска, кисти, ,купить в Ташкенте,стройматериалы по низким ценам в Ташкенте,Ташкент,Узбекистан";


        return view("index.index",compact('slider','product_cats', 'userwrap','about','gallery','news','products','productsHits','productsSale','video',
            'title','meta_key','meta_desc'));
    }


    public function products(){

        $products = Product::getProducts();
        $cat = ProdCat::getCategory();


        $title = "integ.uz, стройматериалы, в Ташкенте Узбекистан, лучшие товары по низким ценам, Нужны стройматериалы? Покупай у Integ.uz, экономь с нами";
        $meta_desc = "Если вам нужны стройматериалы,то integ.uz предлагает стройматериалы высокого качества в Ташкенте и по Узбекистану,у нас самые низкие цены в Ташкенте.Купить стройматериалы
         в Ташкенте по низким ценам,только у нас самые низкие цены на
        стройматериалы";
        $meta_key = "стройматериалы,шпатель,разбавитель, краска, лакокраска, кисти, ,купить в Ташкенте,стройматериалы по низким ценам в Ташкенте,Ташкент,Узбекистан";

        return view("products.index",compact('products','cat','title','meta_key','meta_desc'));
    }

    public function shops() {
        $shops = Shops::all();
        $cat = ProdCat::getCategory();
	
	
	    $title = "integ.uz, стройматериалы, в Ташкенте Узбекистан, лучшие товары по низким ценам, Нужны стройматериалы? Покупай у Integ.uz, экономь с нами";
	    $meta_desc = "Если вам нужны стройматериалы,то integ.uz предлагает стройматериалы высокого качества в Ташкенте и по Узбекистану,у нас самые низкие цены в Ташкенте.Купить стройматериалы
         в Ташкенте по низким ценам,только у нас самые низкие цены на
        стройматериалы";
	    $meta_key = "стройматериалы,шпатель,разбавитель, краска, лакокраска, кисти, ,купить в Ташкенте,стройматериалы по низким ценам в Ташкенте,Ташкент,Узбекистан";
	
	    return view("shops.index",compact('shops','cat','title','meta_key','meta_desc'));
    }

    public function shopsdetail($slug) {
        $shop = Shops::where('slug', $slug)->firstOrFail();

        $products = Product::limit(6)->get();

        $cat = ProdCat::getCategory();
        $shop_products = Product::where('shop_id', $shop->id )->get();
	    $title = "integ.uz, стройматериалы, в Ташкенте Узбекистан, лучшие товары по низким ценам, Нужны стройматериалы? Покупай у Integ.uz, экономь с нами";
	    $meta_desc = "Если вам нужны стройматериалы,то integ.uz предлагает стройматериалы высокого качества в Ташкенте и по Узбекистану,у нас самые низкие цены в Ташкенте.Купить стройматериалы
         в Ташкенте по низким ценам,только у нас самые низкие цены на
        стройматериалы";
	    $meta_key = "стройматериалы,шпатель,разбавитель, краска, лакокраска, кисти, ,купить в Ташкенте,стройматериалы по низким ценам в Ташкенте,Ташкент,Узбекистан";
	
	
	    return view("shops.detail",compact('cat','shop','shop_products','products','title','meta_key','meta_desc'));
    }

    public function category($slug){

        $id = ProdCat::where('slug', $slug)->firstOrFail();

        $products = Product::where('cat_id', $id->id)->paginate(12);

        $cat = ProdCat::getCategory();
        $title = "$id->title";
        $meta_desc = "$id->meta_desc";
        $meta_key = "$id->meta_key";

        return view("products.category",compact('products','cat','title','meta_key','meta_desc', 'id'));
    }

    public function detail($slug){


        $product = Product::where('slug', $slug)->firstOrFail();

        //recentviews store in cookie
        if(array_key_exists('recentviews', $_COOKIE)) {
            $cookie = $_COOKIE['recentviews'];
            $cookie = unserialize($cookie);
        } else {
            $cookie = array();
        }

        if(!in_array($product->id, $cookie, true)){
            array_push($cookie, $product->id);
        }

        setcookie('recentviews', serialize($cookie), time()+3600, '/', NULL, 0 );


        $products = Product::whereIn('id', $cookie)->get();
        //recent view

        $cat = ProdCat::getCategory();
        $poductCat = ProdCat::where('id', $product->cat_id )->firstOrFail();
        $title = "$product->title";
        $meta_desc = "$product->meta_desc";
        $meta_key = "$product->meta_key";
        $contacts = Contact::find(1);

        return view("products.detail",compact('contacts','product','cat','products','poductCat','title','meta_key','meta_desc'));
    }



    public function newsdetail($slug){

        $news = News::where('slug', $slug)->firstOrFail();




        $order = News::orderBy('created_at','desc')->take(3)->get();
        $gallery = Gallery::limit(9)->get();


        $title = "$news->title";
        $meta_desc = "$news->meta_desc";
        $meta_key = "$news->meta_key";



        return view("news.detail",compact('news','order','gallery','title','meta_key','meta_desc'));
    }

    public function gallery(){

        $gall = Gallery::all();
        $cat = ProdCat::getCategory();


        $title = "";
        $meta_desc = "";
        $meta_key = "";

        return view("gallery.index",compact('gall','cat','title','meta_key','meta_desc'));
    }

    public function news(){

        $news = News::all();
        $order = News::orderBy('created_at','desc')->take(3)->get();
        $gallery = Gallery::limit(9)->get();
	    $title = "integ.uz, стройматериалы, в Ташкенте Узбекистан, лучшие товары по низким ценам, Нужны стройматериалы? Покупай у Integ.uz, экономь с нами";
	    $meta_desc = "Если вам нужны стройматериалы,то integ.uz предлагает стройматериалы высокого качества в Ташкенте и по Узбекистану,у нас самые низкие цены в Ташкенте.Купить стройматериалы
         в Ташкенте по низким ценам,только у нас самые низкие цены на
        стройматериалы";
	    $meta_key = "стройматериалы,шпатель,разбавитель, краска, лакокраска, кисти, ,купить в Ташкенте,стройматериалы по низким ценам в Ташкенте,Ташкент,Узбекистан";
	
	
	    return view("news.index",compact('news','order','gallery','title','meta_key','meta_desc'));
    }

    public function about(){

        $about = About::getAbout();
        
        $title = "";
        $meta_desc = "";
        $meta_key = "";

        
        return view("about.index",compact('about','title','meta_key','meta_desc'));
    }

    public function video(){

        $video = Video::all();
        $title = "";
        $meta_desc = "";
        $meta_key = "";
        return view("video.index",compact('video','title','meta_key','meta_desc'));
    }

    public function contact(){

        $contact = Contact::all();
        $title = "";
        $meta_desc = "";
        $meta_key = "";
        return view("contact.index",compact('contact','title','meta_key','meta_desc'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        $price = 0;
	
	    if($product->price) $price = trim(preg_replace('/[ ,.]/', '', $product->price));
	    Cart::add($product->id, $product->title, 1, $price);
	    return redirect('/cart');
	    
	    

    }

    public function orders(){
        $user = Auth::user();
        $orders = Order::where('user_id', '=', $user->id)->get();
	
	    $title = "integ.uz, стройматериалы, в Ташкенте Узбекистан, лучшие товары по низким ценам, Нужны стройматериалы? Покупай у Integ.uz, экономь с нами";
	    $meta_desc = "Если вам нужны стройматериалы,то integ.uz предлагает стройматериалы высокого качества в Ташкенте и по Узбекистану,у нас самые низкие цены в Ташкенте.Купить стройматериалы
         в Ташкенте по низким ценам,только у нас самые низкие цены на
        стройматериалы";
	    $meta_key = "стройматериалы,шпатель,разбавитель, краска, лакокраска, кисти, ,купить в Ташкенте,стройматериалы по низким ценам в Ташкенте,Ташкент,Узбекистан";
	
	
	    return view("orders.index", compact('title','meta_key','meta_desc', 'user', 'orders','products'));
    }

    public function sale_hits_products($slug) {


        $products = Product::where("is_$slug", 1)->paginate(18);
        $id = 0;
        $cat = ProdCat::getCategory();
	    $title = "integ.uz, стройматериалы, в Ташкенте Узбекистан, лучшие товары по низким ценам, Нужны стройматериалы? Покупай у Integ.uz, экономь с нами";
	    $meta_desc = "Если вам нужны стройматериалы,то integ.uz предлагает стройматериалы высокого качества в Ташкенте и по Узбекистану,у нас самые низкие цены в Ташкенте.Купить стройматериалы
         в Ташкенте по низким ценам,только у нас самые низкие цены на
        стройматериалы";
	    $meta_key = "стройматериалы,шпатель,разбавитель, краска, лакокраска, кисти, ,купить в Ташкенте,стройматериалы по низким ценам в Ташкенте,Ташкент,Узбекистан";
	
	
	    return view("products.sale-hits",compact('products','cat','title','meta_key','meta_desc', 'id'));

    }

}
