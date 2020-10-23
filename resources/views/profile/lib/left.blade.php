
                    <div class="cabinet-menu">
                        <div class="">
                            <ul class="menu vertical no-bullet">
                                <li><a class="current icon profile" href="{{ url('profile') }}"><span >Мой профиль</span></a></li>
                                <li> <a class="icon orders" aria-current="false" href="{{ route('products.index') }}"> Товары </a> </li>
                                <li> <a class="icon bills" href="{{route('orders')}}">Заказы</a> </li>
                          <!--       <li> <a class="icon wishlist" aria-current="false" href="cabinet-favorit.html"> Избранное </a> </li> -->
                                <li> <a class="icon shops" aria-current="false" href="{{ route('seller-shops.index') }}"> Магазины </a> </li>
                                <li> <a class="icon bills" aria-current="false" href="cabinet-bills.html"> Счет </a> </li>
                                <li> <a class="icon watchlist" aria-current="false" href="{{ route('profile-watchlist') }}"> Просмотренные </a> </li>
                                <li class="magazine_act"> <a class="icon open-shops" aria-current="false" href="{{ route('seller-shops.create') }}"> Открыть магазин </a> </li>
                            </ul>
                        </div>
                    </div>
