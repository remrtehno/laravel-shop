
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
                     <div class="form-group">
                        <a href="{{ route('products.create') }}" class="btn btn-success">Добавить</a>
                    </div>
                    <br>

                    <div class="latest-orders cabinet-block">
                        <div class="score_main">
                            <table class="score table">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Название</th>
                                        <th>Описание</th>
                                        <th>Сумма</th>
                                        <th>Статус</th>
                                        <th>Тип</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($prod->count()>0)
                                    @foreach($prod as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td><a target="_blank" href="{{ route('detail',['slug'=>$item->slug]) }}"><span style="color: blue;">{{$item->title}}</span></a></td>
                                        <td>{!!$item->text!!}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->label}}</td>
                                        <td>БУДЕТ ИЗ ЗАКАЗОВ</td>
                                        <td>


                            <a href="{{ route('products.edit',['id'=>$item->id]) }}" class="fa fa-pencil-alt" style="float: left;"></a>

                                <form action="{{route('products.destroy',['id'=>$item->id])}}" method="post">
                                    @csrf

                                    <input type="hidden" name="_method" value="delete">
                                    <button onclick="return confirm('are you sure?')" type="submit" class="delete" style="float: left;border: 0;background: none; color: #0d6aad">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>


                            </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6">
                                            <div class="free_score">
                                                <p></p>
                                                <h3 align="center">Нет данных</h3>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
@endsection