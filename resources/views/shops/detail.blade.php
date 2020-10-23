@extends("main.main")



@section('content')

<main>
    <div class="container-fluid wrapper-shop">
        
    
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="shop-wrap">
                    <img src="{{$shop->getImage()}}" alt="">
                    <div class="about-shop">
                        <h5>{{$shop->title}}</h5>
                    
                    <p></p>
                    <h5 class="title">О бренде</h5>
                    <p></p>
                    <div class="shop-description">
                        {!! $shop->anonce !!}
                    </div><!-- /.shop-description -->
                    <p></p>
                    <h5 class="title-address">Адрес магазина:</h5>
                    <div class="address">
                        {!! $shop->address !!}
                    </div><!-- /.address -->
                    </div><!-- /.about-shop -->
                    @if($shop->map)
                    <div class="map">
                        <div id="shop-{{$shop->id}}" style="height: 200px;" class="map" data-map="{{$shop->map}}" data-title="{{$shop->title}}"></div><!-- /#shop-{{$shop->id}} -->
                    </div><!-- /.map -->    
                    @endif
                </div><!-- /.shop-wrap -->
            </div><!-- /.col-md-4 col-lg-3 -->
            <div class="col-md-8 col-lg-9">
                 <section class="products-container products-container-wrap">
                                                <div class="row small-up-2 medium-up-4 large-up-4" style="padding-left: 15px; padding-right: 15px">
                                                     @foreach($shop_products as $val)
                                       
                                       
                                                    <div class="column no-column-padding">
                                                        <div class="product-item"> 
                                                            <a class="clickable" aria-current="false" href="{{route('detail',['slug'=>$val->slug])}}">
                                                                @if($val->label)
                                                                <div class="label-container"> <span class="label sale alert inline">{{$val->label}} %</span> </div>
                                                                @endif
                                                                <div class="bottom">
                                                                    <div class="product-image">
                                                                        <img src="{{ $val->getImage() }}" class="product-img square-180" />
                                                                    </div>
                                                                    <h4 class="product-title">{{$val->title}}</h4>
                                                                    <div class="product__price clearfix"> 
                                                                        <strong> {{$val->price}} <span>сум. за</span> <span class="unit-text">1 шт</span> </strong> <span class="small__text hide">( 4 990 сум. за 1 шт )</span>
                                                                </div>
                                                                <div class="add-cart horizontal cart-44732 wide-box not-added"> <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"></span> В корзину </button> </div>
                                                            </a> </div>
                                                    </div>
                                                </div>


                                         @endforeach

                                                    
                                                </div>
                                            </section>


            </div><!-- /.col-md-8 col-lg-9 -->
        </div><!-- /.row -->

</div><!-- /.container-fluid -->


        <section class="product-details-page">
            <div>

                <div class="similar-products beauty-wrapper animated fadeInUp normal">
                    <div class="row">
                        <div class="small-12">
                            <section class="products-container products-slider similar-products show">
                                <div class="row">
                                    <div class="small-12">
                                        <h4 class="section-title beauty-title">Каталог лучших предложений</h4>
                                        <div>
                                            <section class="products-container products-container-wrap">
                                                <div class="row small-up-2 medium-up-4 large-up-6" style="padding-left: 15px; padding-right: 15px">
                                                     @foreach($products as $val)
                                       
                                       
                                                    <div class="column no-column-padding">
                                                        <div class="product-item"> 
                                                            <a class="clickable" aria-current="false" href="{{route('detail',['slug'=>$val->slug])}}">
                                                                @if($val->label)
                                                                <div class="label-container"> <span class="label sale alert inline">{{$val->label}} %</span> </div>
                                                                @endif
                                                                <div class="bottom">
                                                                    <div class="product-image">
                                                                        <img src="{{ $val->getImage() }}" class="product-img square-180" />
                                                                    </div>
                                                                    <h4 class="product-title">{{$val->title}}</h4>
                                                                    <div class="product__price clearfix"> 
                                                                        <strong> {{$val->price}} <span>сум. за</span> <span class="unit-text">1 шт</span> </strong> <span class="small__text hide">( 4 990 сум. за 1 шт )</span>
                                                                </div>
                                                                <div class="add-cart horizontal cart-44732 wide-box not-added"> <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"></span> В корзину </button> </div>
                                                            </a> </div>
                                                    </div>
                                                </div>


                                         @endforeach

                                                    
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    

@endsection

