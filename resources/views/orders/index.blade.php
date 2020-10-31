@extends("main.main")









@section('content')

<section class="user-cabinet beauty-wrapper">
            <div class="row">
                <div class="small-12 medium-12 columns">
                    <h1 class="title hide-for-small-only hide-for-medium-only hide-for-large-only">
                        @lang('home.profile_my')
                    </h1>
                </div>
                <div class="small-12 medium-3 columns">
                    
                      @include("profile.lib.left")

                    
                </div>
                <div class="small-12 medium-9 columns details">
                    <div class="latest-orders cabinet-block">
                        <h4 class="widget-title">
                            @lang('home.orders')
                        </h4>
                        <div class="score_main">
                           
                            <table class="score table">
                                <thead>
                                    <tr>
                                        <th>@lang('home.orders_name')</th>
                                        <th>
                                            @lang('home.orders_sum')
                                        </th>
                                        <th>
                                            @lang('home.orders_status')
                                        </th>
                                    </tr>
                                    @if($orders->count() > 0)
                                    @foreach($orders as $item)
        
                                        <tr>
                                            <td>{{$item->tovar_name}}</td>
                                            <td>{{$item->tovar_price}}</td>
                                            <td>{{$item->status}}</td>
                                        </tr>

                                    @endforeach
                                    @else
                                        <tr><td>@lang('home.nothing')</td></tr>
                                    @endif
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>



@endsection


@section('footerinput')
    @include("lib.footerinput")
@endsection