<header id="header" class="header-wrap">
   
        <div class="hdr_top">
            <div class="container">
                <div class="hdr_top_main">
                    <div class="hdr_top_right">
                        <a href="">
                             @include('locales.locale')
                        </a>
                        <a href="{{ route('all-shops') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g>
                                    <g>
                                        <path d="M5.4 11.4V11a.6.6 0 0 1 1.2 0v1a.6.6 0 0 1-.6.6H4a.6.6 0 0 1-.6-.6v-1a.6.6 0 0 1 1.2 0v.4zm3.2-.467V14.4h2.8v-3.467zm3.8-9.266a.067.067 0 0 0-.067-.067H3.667a.067.067 0 0 0-.067.067V2.4h8.8zm.85 6.483a1.15 1.15 0 0 0 1.147-1.062l-1.148-3.442a.067.067 0 0 0-.063-.046H2.814a.067.067 0 0 0-.063.046L1.603 7.088A1.15 1.15 0 0 0 3.9 7a.6.6 0 0 1 1.2 0 1.15 1.15 0 1 0 2.3 0 .6.6 0 0 1 1.2 0 1.15 1.15 0 1 0 2.3 0 .6.6 0 0 1 1.2 0c0 .635.515 1.15 1.15 1.15zM.4 7l.03-.19 1.182-3.544c.127-.38.423-.67.788-.797v-.802C2.4.967 2.967.4 3.667.4h8.666c.7 0 1.267.567 1.267 1.267v.802c.365.127.66.416.788.797l1.181 3.544.031.19c0 .795-.395 1.499-1 1.924v5.41c0 .699-.567 1.266-1.267 1.266H2.667c-.7 0-1.267-.567-1.267-1.267v-5.41A2.347 2.347 0 0 1 .4 7zm5.85 2.35c-.695 0-1.32-.302-1.75-.782a2.344 2.344 0 0 1-1.9.777v4.988c0 .037.03.067.067.067H7.4v-4.067a.6.6 0 0 1 .6-.6h4a.6.6 0 0 1 .6.6V14.4h.733c.037 0 .067-.03.067-.067V9.345a2.344 2.344 0 0 1-1.9-.777c-.43.48-1.055.782-1.75.782-.695 0-1.32-.302-1.75-.782-.43.48-1.055.782-1.75.782z"></path>
                                    </g>
                                </g>
                            </svg>
                            <span>@lang('home.shop')</span>
                        </a>
                  
                        <a href="/services">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.666" height="13.333" viewBox="0 0 14.666 13.333">
                                <path id="Combined_Shape" data-name="Combined Shape" d="M10,13.333H2a2,2,0,0,1-2-2V4.667a2,2,0,0,1,2-2H4V2A2,2,0,0,1,6,0H8.666a2,2,0,0,1,2,2v.667h2a2,2,0,0,1,2,2v6.667a2,2,0,0,1-2,2ZM12.667,12a.667.667,0,0,0,.667-.667V4.667A.667.667,0,0,0,12.667,4h-2v8ZM9.334,12V4h-4v8Zm-8-7.333v6.667A.667.667,0,0,0,2,12H4V4H2A.667.667,0,0,0,1.333,4.667Zm8-2V2a.667.667,0,0,0-.667-.667H6A.667.667,0,0,0,5.333,2v.667Z"></path>
                            </svg>
                            <span>@lang('home.services')</span>
                        </a>
                        <a href="/blogs/list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.663" height="14.672" viewBox="0 0 14.663 14.672">
                                <path id="Combined_Shape" data-name="Combined Shape" d="M.195,14.477a.667.667,0,0,1,0-.943l1.8-1.8V6.339a.663.663,0,0,1,.2-.472l4.5-4.5a4.669,4.669,0,0,1,6.6,6.6L8.805,12.476a.664.664,0,0,1-.472.2H2.943l-1.8,1.8a.667.667,0,0,1-.943,0Zm7.862-3.138,1.329-1.333H5.609L4.276,11.339ZM7.638,2.31l-4.3,4.305V10.4l6.2-6.2a.667.667,0,0,1,.943.943L6.942,8.672h3.724l.047,0,1.641-1.646A3.336,3.336,0,1,0,7.638,2.31Z"></path>
                            </svg>
                            <span>@lang('home.blog')</span>
                        </a>
                        <a href="/help">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.666" height="14.666" viewBox="0 0 14.666 14.666">
                                <path id="Combined_Shape" data-name="Combined Shape" d="M2.148,12.518a7.333,7.333,0,1,1,10.37-10.37,7.333,7.333,0,1,1-10.37,10.37Zm5.185.815a5.972,5.972,0,0,0,3.743-1.314L9.171,10.113a3.327,3.327,0,0,1-3.675,0L3.59,12.019A5.972,5.972,0,0,0,7.333,13.333Zm-6-6a5.972,5.972,0,0,0,1.314,3.743L4.553,9.171a3.328,3.328,0,0,1,0-3.674L2.647,3.59A5.972,5.972,0,0,0,1.333,7.333Zm10.686,3.743a5.989,5.989,0,0,0,0-7.486L10.113,5.5a3.327,3.327,0,0,1,0,3.675ZM5.333,7.333a2,2,0,1,0,2-2A2,2,0,0,0,5.333,7.333ZM5.5,4.553a3.328,3.328,0,0,1,3.674,0l1.906-1.906a5.989,5.989,0,0,0-7.487,0Z"></path>
                            </svg>
                            <span>@lang('home.help')</span>
                        </a>
                        @if(Cart::count())
                        <a href="{{route('cart')}}" style=" position: relative;">
                            <i style="margin-right: 10px; font-size: 20px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            <span class="badge" style="background: red;color: white;position: absolute;right: 0;top: -5px;font-weight: 800;font-size: 13px;padding: 0 3px;min-width: 17px;min-height: 17px;">
                                {{Cart::count()}}
                            </span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hdr_bottom_main">
                <div class="hdr_bottom_main_left">
                    <a href="{{ url('/') }}" class="logo"><img src="/public/uploads/logo/logo.png" /></a>
                    <span class="all_categories_btn">
                        <picture>
                            <source srcset="/public/assets/img/category_icon.svg" type="image/webp"><img src="/public/assets/img/category_icon.svg" alt="category_icon" /></picture>
                        @lang('home.allCats')
                    </span>
                    <form onsubmit="e.preventDefault()" class="search_form_header" method="get">
                        <button type="submit">
                            <picture>
                                <source srcset="/public/assets/img/search.svg" type="image/webp"><img src="/public/assets/img/search.svg" alt="search" />
                            </picture>
                        </button>
                        <input type="text" name="query" id="text" class="typeahead" required="" placeholder="@lang('home.search')" value="" />
                    </form>



                </div>
                <div class="hdr_bottom_main_right">
                    @guest 
                        <a href="{{ route('login') }}" class="enter_site">
                            <picture>
                                <source srcset="/public/assets/img/user_plus.svg" type="image/webp"><img src="/public/assets/img/user_plus.svg" alt="user_plus" />
                            </picture>
                            <span>@lang('home.login')</span>
                        </a>
                    @else
                         <div class="dropdown us_drop">
                          <button class="dropbtn">
                            <i class="fas fa-user"></i>
                                @lang('home.hi'), {{ Auth::user()->name }}
                            </button>
                          <div class="dropdown-content">


                                @include("profile.lib.left")



                           <!--  <div class="cabinet-menu">
                                <div class="">
                                    <ul class="menu vertical no-bullet">
                                        <li> <a class="icon orders" href="cabinet-adv.html"> Объявления </a> </li>
                                        <li> <a class="icon wishlist" aria-current="false" href="cabinet-favorit.html"> Избранное </a> </li>
                                        <li> <a class="icon shops" aria-current="false" href="cabinet-shops.html"> Магазины </a> </li>
                                        <li> <a class="icon bills" aria-current="false" href="cabinet-bills.html"> Счет </a> </li>
                                        <li> <a class="icon watchlist" aria-current="false" href="/user/watchlist"> Просмотренные </a> </li>
                                        <li class="magazine_act"> <a class="icon open-shops" aria-current="false" href="cabine-create-shop.html"> Открыть магазин </a> </li>
                                    </ul>
                                </div>
                            </div> -->


                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                <i style="font-size: 16px; color: green; vertical-align: middle; margin-right: 10px;" class="fas fa-sign-out-alt"></i>
                                <span>@lang('home.logout')</span>
                            </a>

                            
                          </div>
                        </div>
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                    <a href="{{ route('seller-shops.create') }}" class="add_ads">
                        <picture>
                            <source srcset="/public/assets/img/plus_circle.svg" type="image/webp"><img src="/public/assets/img/plus_circle.svg" alt="plus_circle" />
                        </picture>
                        @lang('home.openShop')
                        
                    </a>
                </div>
                <div class="toggle-menu-mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <div class="reveal-overlay product-categories-wrap" style="/* display: block; */">
        <div class="swipe left swipe-menu reveal" id="catalogMenu" style="display: block;">
            <div class="swipe-menu-container">
                <div class="swipe-menu-header">
                    <div class="reveal-header">

                        <h4>@lang('home.catProducts') </h4> <button class="close-button" aria-label="Close modal"><span aria-hidden="true">×</span></button>
                    </div>
                </div>
                <div class="swipe-menu-body">
                    <div class="reveal-body">
                        <ul class="vertical dropdown menu" id="revealMenu">
                            @foreach($product_cats as $item)
                            <li role="menuitem"> 
                                <a class="" data-add="{{$item->slug}}" aria-current="false" href="{{route('category', ['slug' => $item->slug]) }}">
                                    <img src="{{$item->getImage()}}" alt="" class="category-image"> <span>{{$item->title}}</span>
                                </a> 
                            </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>