@extends("main.main")



@section('content')

<style>
    .desc:empty {
        display: none;
    }
</style>
    <main>
        <section class="search-results product-list-container">
            <div class="row">
                <div class="small-12 medium-12">
                    <nav aria-label="You are here:" role="navigation" style="position: relative">
                        <ul class="breadcrumbs">
                            <li> <a href="/">@lang('home.main') </a> </li>

                            <li> <a href="{{route('category',['slug'=>$id->slug])}}">{{$id->getTitle()}} </a> </li>

                            
                        </ul>
                    </nav>
                </div>
                <div class="small-12 medium-2 side-column filter-side-wrap">
                    <div class="facet-filter-wrap">
                        <div class="facet-box categories-facet-box">
                            <div class="facet-box__header">
                                <h4 class="facet-box__title"> <span class="text">@lang('home.cats')</span> <span class="toggle-btn">                      <i class="fa fa-angle-down"></i>                    </span> </h4>
                            </div>
                            <div class="facet-box__body">
                                <div class="product-filter-menu">
                                    <ul class="menu vertical" data-animation="animated fadeInUp normal">

                                        @foreach($cat as $item)

                        
                                        <li class="{{$id->id == $item->id ? 'active' : ''}}"> <a class="clickable {{$id->id == $item->id ? 'active' : ''}}" aria-current="true" href="{{ route('category',['slug'=>$item->slug]) }}"> {{ $item->getTitle() }} </a> </li>

                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </div>


 <div class="facet-box price-range-facet">
                            <div class="facet-box__header">
                                <h4 class="facet-box__title"> <span class="text">@lang('home.branchPrice')</span> <span class="toggle-btn">                      <i class="fa fa-angle-down"></i>                    </span> </h4>
                            </div>
                            <div class="facet-box__body">
                                <div>
                                    <form class="price-range-form"> <input class="input-field price-field price-field-min" placeholder="Min" type="text" value="1000" /> <span>-</span> <input class="input-field price-field price-field-max" placeholder="Max" type="text" value="" /> <input type="submit" class="hide" value="Ok" /> </form>
                                    <div class="slider-range-box">
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="small-12 medium-10 products-column columns">
                    <div>
                        <section class="products-container animated fadeInUp normal" data-animation="animated fadeInUp normal">
                             @if($products->count()>0)
                            <div class="row small-up-2 medium-up-4 large-up-5">
                                 @foreach($products as $item)
<div class="column no-column-padding" data-price="{{ $item->price ?  $item->price : 0}}">
    <div class="product-item">
        @if($item->label)
        <div class="label-container"> <span class="label sale alert inline">{{$item->label}} %</span> </div>
        @endif

        <div class="bottom">
            <a href="{{route('detail',['slug'=>$item->slug]) }}">
                <div class="product-image"> 
                    <div class="overlay">
                        <i class="fa fa-eye" aria-hidden="true"></i> @lang('home.detail')
                    </div> 
                    <img src="{{ $item->getImage() }}" class="product-img square-180" /> 
                </div>
                <h4 class="product-title">{{ $item->title }}</h4>
            </a>
            <div class="desc" style="height: 30px; overflow: hidden;">
                {!! str_limit($item->anonce,350) !!}
            </div>
            <div class="product__price clearfix"> 
                <strong>
                    {{ $item->price ?  $item->price : 0}}<span> сум.</span> 
                </strong>
            </div>
        </div> <!-- bottom -->
        <div class="add-cart horizontal cart-7286 wide-box not-added">
            <button class="button expanded add-to-cart"> <span class="gl-shopping-cart"><a style="color:white;" aria-current="false" href="{{route('add',['slug'=>$item->id])}}"></span> @lang('home.tobasket')</a> </button>
        </div> <!-- add-cart -->
    </div><!--  product-item -->
</div> <!-- column -->

                                 
                                 @endforeach
</div> <!-- row -->
                           
                             @else
                                    <section class="lefd">
                                        <h2>@lang('home.nothing')</h2>
                                    </section>
                                @endif
                        </section>

                        {{ $products->links()}}
                    </div>
                </div>
            </div>
        </section>
    </main>




   
    

            
                                               



@endsection

