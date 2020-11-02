
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
                     <div class="form-group">
                        <a href="{{ route('seller-shops.create') }}" class="btn btn-success">
                             @lang('home.add')
                        </a>
                    </div>
                    <br>

                   <div class="latest-orders cabinet-block">
                        @if($shops->count()>0)
                        <table class="score table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th width="200">
                                        @lang('home.profile_shops')
                                    </th>
                                    <th>
                                        @lang('home.orders_desc')
                                    </th>
                                    <th>@lang('home.orders_actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shops as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->getTitle()}}</td>
                                    <td>{!!$item->anonce!!}</td>
                                    <td> 

                                       <a href="{{ route('seller-shops.edit',['id'=>$item->id]) }}" class="fa fa-pencil-alt" style="float: left;"></a>

                                <form action="{{route('seller-shops.destroy',['id'=>$item->id])}}" method="post">
                                    @csrf

                                    <input type="hidden" name="_method" value="delete">
                                    <button onclick="return confirm('are you sure?')" type="submit" class="delete" style="float: left;border: 0;background: none; color: #0d6aad">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else

                        <div align="center"><img src="/assets/img/free_score.png" alt="No datas"><br> <br>
                            <h3>Пусто</h3>
                        </div>

                        @endif
                    </div>



                </div>
                </div>
            </div>
        </section>
@endsection