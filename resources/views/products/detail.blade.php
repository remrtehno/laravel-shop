@extends("main.main")



@section('content')

    <main>
        <section class="product-details-page">
            <div class="row">
                <div class="small-12 medium-12 columns">
                    <nav style="position:relative">
                        <ul class="breadcrumbs">
                            <li> <a href="/">Главная </a> </li>
                            <li> <a href="{{route('category',['slug'=>$poductCat->slug]) }}">{{$poductCat->title}}</a> </li>
                            <li> <a>{{$product->title}} </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div>
                <div class="section-product-details beauty-wrapper">
                    <div class="row">
                        <div class="small-12 medium-5 columns">
                            <div class="image-container">

                                <div style="position: absolute;z-index: 099;left: 0;top: 10px;">

                                    {!! $product->getSale() !!}
                                    {!! $product->getHits() !!}
                                </div>


                                <div class="product-image-carousel">
                                    <div class="slick-slider">
                                        <div class="image">

                                            <img src="{{ $product->getImageHome() }}" width="400" height="400" alt="">
                                        </div><!-- /.image 400x400 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 {{ $product->getShopByProduct() ? 'medium-3' : 'medium-6' }} columns">
                            <div class="product-detail animated fadeInUp normal" data-animation="animated fadeInUp normal">
                                <h2 class="title"> {{ $product->title }} <div class="share-box"> <a class="share-link-button"><i class="link-share fa fa-share-square-o"></i></a>

                                    </div>
                                </h2>
                                <div class="product__price">
                                    @if($product->label)
                                        <div style="display: inline-block; background: red; font-size: 16px; color: white; padding: 5px 10px;
                                              "> Скидка {{$product->label}} %</div>
                                    @endif
                                    <p></p>
                                    <strong>
                                        {{ $product->price }}  <span>сум.</span>
                                    </strong> <span class="small__text">за<!-- --> 1<!-- -->шт </span> </div>

                                <div class="row">
                                    <div class="small-12 medium-12 columns main-buttons">
                                        <div class="clearfix">
                                            <div class="add-cart horizontal cart-41908                              wide-box not-added">
                                                <a href="{{ route('add', [ 'id' => $product->id ]) }}">
                                                    <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"></span> <!-- -->В корзину </button>

                                                </a> </div>
                                        </div>
                                        <!-- <div class="add-buttons">
                                            <div class="my-favorite-btn green clickable"> <i class="far fa-heart"></i> Избранное </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row hide-for-small-only" style="overflow-x:hidden">
                                    <div class="small-12 medium-12 xlarge-12 columns"></div>
                                </div>
                            </div>
                        </div>
                        @if($product->getShopByProduct())
                            <div class="small-12 medium-3 columns">
                                <div class="product-right product_company_info h-100" style="  max-width: 100%;">
                                    <h3 class="h3 title-company-info">Контакты</h3>
                                    <a  class="product-right-title">

                                        Адрес: <b>{{$contacts->address}}</b>
                                    </a>
                                    <div class="mer-lname">
                                        Телефон: <a href="tel:{{$contacts->phone}}"> {{$contacts->phone}} </a> <br>
                                        Email: <a href="mailto:{{$contacts->email}}"> {{$contacts->email}} </a>

                                    </div>
                                    <br>




                                    <br>
                                    <div class="contacts__item">

                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                @if($products->count())
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
        @else
            <p style="padding: 30px;"></p>
            @endif

            </div>
            </section>
    </main>





@endsection

