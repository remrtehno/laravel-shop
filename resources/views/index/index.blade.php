@extends("main.main")







@section('content')







   <main>
   	<section class="home-page">
            <div class="home-intro">
							@section('slider')
							    @include("lib.slider")
							@endsection



<!-- categories -->
	                <section class="property">
                    <div class="container">
                        <div class="slick-categories">
                            @foreach($product_cats as $cat)
                            <div class="item-slide"> 


                                <a href="{{route('category',['slug'=>$cat->slug])}}">
                                    <img src="{{ $cat->getImage() }}" alt="" />

                                    <p>{{$cat->title}}</p>
                                </a> 
                            </div>
                            @endforeach

      
                        </div>
                    </div>
                </section>


                <section class="products-container products-slider IS_BEST_OFFER_ProductCarousel show">
                    <div class="row">
                        <div class="small-12">
                            <h4 class="section-title"> Каталог лучших предложений
                             <a class="button btn-all-link" aria-current="false" href="{{route('products', ['slug' => 'hits'])}}"> Все
                                    <i class="fa fa-angle-right"></i>
                                </a> </h4>
                            <div>
                                <section class="products-container products-container-wrap">
                                    <div class="row small-up-2 medium-up-4 large-up-6" style="padding-left: 15px; padding-right: 15px">

                                         @foreach($productsHits as $val)
                                               <div class="column no-column-padding">
                                            <div class="product-item"> 
                                                
                                                    @if($val->label)
                                                    <div class="label-container"> <span class="label sale alert inline">{{$val->label}} %</span> </div>
                                                    @endif
                                                    
                                                    <div class="bottom">
                                                        <a class="clickable" aria-current="false" href="{{route('detail',['slug'=>$val->slug])}}">
                                                        <div class="product-image">
                                                            <div class="overlay"><i class="fa fa-eye" aria-hidden="true"></i> Подробнее</div>
                                                            <img src="{{ $val->getImage() }}" class="product-img square-180" />
                                                        </div>
                                                        <h4 class="product-title">{{$val->title}}</h4>
                                                        <div class="product__price clearfix"> 
                                                            <strong> {{$val->price}} <span>сум. за</span> <span class="unit-text">1 шт</span> </strong> <span class="small__text hide">( 4 990 сум. за 1 шт )</span>
                                                    </div>
                                                </a>

                                                    <div class="add-cart horizontal cart-44732 wide-box not-added">
                                                     <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"><a style="color:white;" aria-current="false" href="{{route('add',['slug'=>$val->id])}}"></span> В корзину</a> </button> </div>
                                                 </div>
                                        </div>
                                    </div>  <!-- column -->


                                         @endforeach


                                    
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="products-container products-slider IS_BEST_OFFER_ProductCarousel show">
                    <div class="row">
                        <div class="small-12">
                            <h4 class="section-title">
                                Скидочные товары
                                <a class="button btn-all-link" aria-current="false" href="{{route('products',['slug' => 'sale'])}}">
                                    Все
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </h4>
                            <div>
                                <section class="products-container products-container-wrap">
                                    <div class="row small-up-2 medium-up-4 large-up-6" style="padding-left: 15px; padding-right: 15px">
                                         @foreach($productsSale as $val)
                                       
                                       
                                        <div class="column no-column-padding">
                                            <div class="product-item"> 
                                                
                                                    @if($val->label)
                                                    <div class="label-container"> <span class="label sale alert inline">{{$val->label}} %</span> </div>
                                                    @endif
                                                    
                                                    <div class="bottom">
                                                        <a class="clickable" aria-current="false" href="{{route('detail',['slug'=>$val->slug])}}">
                                                        <div class="product-image">
                                                            <div class="overlay"><i class="fa fa-eye" aria-hidden="true"></i> Подробнее</div>
                                                            <img src="{{ $val->getImage() }}" class="product-img square-180" />
                                                        </div>
                                                        <h4 class="product-title">{{$val->title}}</h4>
                                                        <div class="product__price clearfix"> 
                                                            <strong> {{$val->price}} <span>сум. за</span> <span class="unit-text">1 шт</span> </strong> <span class="small__text hide">( 4 990 сум. за 1 шт )</span>
                                                    </div>
                                                </a>

                                                    <div class="add-cart horizontal cart-44732 wide-box not-added">
                                                     <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"><a style="color:white;" aria-current="false" href="{{route('add',['slug'=>$val->id])}}"></span> В корзину</a> </button> </div>
                                                 </div>
                                        </div>
                                    </div>  <!-- column -->


                                         @endforeach

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                

            </div>
            <!--home-intro-->
        </section>
    </main>



@include('lib.advantages')


@endsection


@section('footerinput')
    @include("lib.footerinput")
@endsection