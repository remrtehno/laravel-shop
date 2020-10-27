<?php

namespace App\Providers;

use App\Contact;
use App\News;
use Illuminate\Support\Facades\View;
use App\Logo;
use App\Product;
use App\User;
use App\ProdCat;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('lib.header', function($view){
            $view->with('logo', Logo::all());
            $view->with('product_cats', ProdCat::all());


       });

        view()->composer('*', function($view){
            $view->with('users', User::all());
        });
	
	    view()->composer('*', function($view){
		    $view->with('footer_contacts', Contact::find(1));
	    });

        

        view()->composer('profile/*', function($view){
            $title = "Профиль";
            $meta_desc = "Профиль";
            $meta_key = "";
            $view->with(['title' => $title, 'meta_desc' => $meta_desc, 'meta_key' => $meta_key ]);
        });



    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // //
        //  View::composer(
        //  '*', CategoryComposer::class
        // );

 
    }
}
