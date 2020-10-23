@extends("main.main")








@section('content')

            <section class="user-cabinet beauty-wrapper">
            <div class="row">
                <div class="small-12 medium-12 columns">
                    <h1 class="title hide-for-small-only hide-for-medium-only hide-for-large-only"> Мой профиль </h1>
                </div>
  <div class="small-12 medium-3 columns">
                @include("profile.lib.left")
</div>

                <div class="small-12 medium-9 columns details">
                    <div class="latest-orders cabinet-block">
                        <h4 class="widget-title">Просмотренные</h4>
                        @if($products->count())
                <div class="similar-products beauty-wrapper animated fadeInUp normal">



                                    <div class="small-12">
                                        <h4 class="section-title beauty-title">Каталог лучших предложений</h4>
                                        <div>
                                            <section class="products-container products-container-wrap">
                                                <div class="row small-up-2 medium-up-4 large-up-4" style="padding-left: 15px; padding-right: 15px">
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
                @else
                <p style="padding: 30px;">Пусто</p>
                @endif
                    </div>
                   
                </div>
            </div>
        </section>
@endsection