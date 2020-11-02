<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "MainController@index")->name("index");
//Route::get('/products', "MainController@products")->name("products-main");
Route::get('/category/{slug}', "MainController@category")->name("category");
Route::get('/detail/{slug}', "MainController@detail")->name("detail");
Route::get('/newsdetail/{slug}', "MainController@newsdetail")->name("newsdetail");
Route::get('/gallery', "MainController@gallery")->name("gallery");
Route::get('/news', "MainController@news")->name("news");
Route::get('/about', "MainController@about")->name("about");
Route::get('/video', "MainController@video")->name("video");
Route::get('/contact', "MainController@contact")->name("contact");
Route::get('/all-shops', "MainController@shops")->name("all-shops");
Route::get('/shop/{slug}', "MainController@shopsdetail")->name("shop-detail");
Route::get('/add/{product}', 'MainController@addToCart')->name('add');
Route::get('/cart', 'Basket@index')->name('cart');
Route::resource('/basket', "Basket");
Route::get('/remove/{productId}', 'Basket@removeProductFromCart')->name('remove');
Route::get('/checkout', 'Basket@order')->name('checkout');
Route::post('/checkout-detail', 'Basket@makeOrder')->name('makeOrder');
Route::get('/orders', "MainController@orders")->name('orders');
Route::get('/products/{slug}', "MainController@sale_hits_products")->name('products');


Route::group(['prefix'=>'profile','namespace'=>'Profile','middleware'=>['auth']], function(){
    Route::get('/', 'MainController@index')->name('profile-index');
    Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
    Route::post('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
    Route::resource('products','ProductController');
    Route::resource('seller-shops', 'ShopsController');

    Route::get('/profile-watchlist', 'MainController@watchlist')->name('profile-watchlist');

});




Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','AdminMiddleware']], function(){

    Route::get('/', 'MainController@index');
    Route::resource('/post','ProductController');
    Route::resource('/category','CategoryController');
    Route::resource('/slider','SliderController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/about','AboutController');
    Route::resource('/news','NewsController');
    Route::resource('/video','VideoController');
    Route::resource('/contact','ContactController');
    Route::resource('/logo','LogoController');
    Route::get('/shops/shop-show', 'ShopsController@shopshow')->name('shopshow');
    Route::resource('/shops','ShopsController');
    Route::resource('/orders', "OrdersController");
    Route::resource('/statisics','StatisticsController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
