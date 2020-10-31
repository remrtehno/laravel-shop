
                    <div class="cabinet-menu">
                        <div class="">
                            <ul class="menu vertical no-bullet">
                                <li><a class="current icon profile" href="{{ url('profile') }}"><span >@lang('home.profile_my')</span></a></li>
                                <li> <a class="icon orders" aria-current="false" href="{{ route('products.index') }}"> @lang('home.profile_products') </a> </li>
                                <li> <a class="icon bills" href="{{route('orders')}}">@lang('home.profile_orders')</a> </li>
                          <!--       <li> <a class="icon wishlist" aria-current="false" href="cabinet-favorit.html"> Избранное </a> </li> -->
                                <li> <a class="icon shops" aria-current="false" href="{{ route('seller-shops.index') }}"> @lang('home.profile_shops') </a> </li>
                                <li> <a class="icon watchlist" aria-current="false" href="{{ route('profile-watchlist') }}"> @lang('home.profile_looked') </a> </li>
                                <li class="magazine_act"> <a class="icon open-shops" aria-current="false" href="{{ route('seller-shops.create') }}"> @lang('home.profile_open_shop') </a> </li>
                            </ul>
                        </div>
                    </div>
