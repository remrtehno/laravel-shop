<?php

namespace App\Http\Controllers\Profile;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){



        $user = Auth::user();
      return view("profile.index.index", compact('title','meta_key','meta_desc', 'user'));
    }

    public function watchlist(){


				//recentviews store in cookie
        if(array_key_exists('recentviews', $_COOKIE)) {
            $cookie = $_COOKIE['recentviews'];
            $cookie = unserialize($cookie);
        } else {
            $cookie = array();
        }


       

        $products = Product::whereIn('id', $cookie)->get();
        //recent view

        $user = Auth::user();
      return view("profile.index.watchlist", compact('title','meta_key','meta_desc', 'user', 'products'));
    }
}
