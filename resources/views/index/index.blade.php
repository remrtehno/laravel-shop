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

                                    <p>{{$cat->getTitle()}}</p>
                                </a> 
                            </div>
                            @endforeach

      
                        </div>
                    </div>
                </section>


                <section class="products-container products-slider IS_BEST_OFFER_ProductCarousel show">
                    <div class="row">
                        <div class="small-12">
                            <h4 class="section-title"> @lang('home.catalog_best') 
                             <a class="button btn-all-link" aria-current="false" href="{{route('products', ['slug' => 'hits'])}}"> @lang('home.all') 
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
                                                            <div class="overlay"><i class="fa fa-eye" aria-hidden="true"></i> @lang('home.detail') </div>
                                                            <img src="{{ $val->getImage() }}" class="product-img square-180" />
                                                        </div>
                                                        <h4 class="product-title">{{$val->title}}</h4>
                                                        <div class="product__price clearfix"> 
                                                            <strong> {{$val->price}} <span>
                                                                 <span>@lang('home.sumPerOne')</span> 
                                                            </span>
                                                        </strong>
                                                    </div>
                                                </a>

                                                    <div class="add-cart horizontal cart-44732 wide-box not-added">
                                                     <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"><a style="color:white;" aria-current="false" href="{{route('add',['slug'=>$val->id])}}"></span>
                                                        @lang('home.tobasket')
                                                     </a> </button> </div>
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
                                @lang('home.stocks')

                                <a class="button btn-all-link" aria-current="false" href="{{route('products',['slug' => 'sale'])}}">
                                    @lang('home.all')
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
                                                            <div class="overlay"><i class="fa fa-eye" aria-hidden="true"></i> @lang('home.detail')</div>
                                                            <img src="{{ $val->getImage() }}" class="product-img square-180" />
                                                        </div>
                                                        <h4 class="product-title">{{$val->title}}</h4>
                                                        <div class="product__price clearfix"> 
                                                            <strong> {{$val->price}} 
                                                                <span>@lang('home.sumPerOne')</span> 
                                                            </strong>

                                                    </div>
                                                </a>

                                                    <div class="add-cart horizontal cart-44732 wide-box not-added">
                                                     <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"><a style="color:white;" aria-current="false" href="{{route('add',['slug'=>$val->id])}}"></span> @lang('home.tobasket')</a> </button> </div>
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