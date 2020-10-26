@extends("admin.main.main")

@section("content")


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Все заказы
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Все заказы</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Все заказы</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Дата</th>
                            <th>Магазин</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Цена -0.3%</th>
                            <th>Кол-во</th>


                            {{--<th>Действия</th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        @if(!isset($orders)) <?php $orders = []; ?> @endif

                        @if(isset($orders))
                        @foreach($orders as $item)
                            <tr >
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    {{ $item->getShop() ? $item->getShop()->title : ''  }}
                                    <a style="float: right;" onclick=" $(this.nextElementSibling).toggle()">Детали</a>
                                    <div style="display: none;">
                                        @if($item->getShop())
                                            <hr style="margin: 7px 5px;">
                                            Адрес: {{$item->getShop()->address}}
                                            <hr style="margin: 7px 5px;">
                                            Телефон: {{$item->getShop()->phone}}
                                            <hr style="margin: 7px 5px;">
                                            {{$item->getShop()->text}}

                                        @endif
                                    </div>
                                </td>
                                <td>{{ $item->tovar_name }}</td>
                                {{--<td>{{ $item->getStatus() }}</td>--}}
                                <td> {{ $item->tovar_price }} <br>
                                    <b>Общая:</b> {{ (int)$item->tovar_price * (int)$item->qty }}
                                </td>
                                <td> {{ (int)$item->tovar_price * 0.7 }} <br>
                                    <b>Общая:</b> {{ (int)$item->tovar_price * 0.7 * (int)$item->qty }}
                                </td>
                                <td> {{ $item->qty }}</td>







                                {{--<td>--}}
                                    {{--<form action="{{ route('orders.update',['id'=>$item->id]) }}" method="post">--}}
                                        {{--@csrf--}}
                                        {{--<input type="hidden" name="_method" value="PUT">--}}

                                        {{--<button style="float: left;border: 0;background: none; color: #0d6aad"--}}
                                                {{--type="submit" class="fa fa-check delete" style="float: left;">--}}


                                        {{--</button>--}}
                                    {{--</form>--}}


                                    {{--<form action="{{route('orders.destroy',['id'=>$item->id])}}" method="post">--}}
                                        {{--@csrf--}}

                                        {{--<input type="hidden" name="_method" value="delete">--}}
                                        {{--<button onclick="return confirm('are you sure?')" type="submit" class="delete"--}}
                                                {{--style="float: left;border: 0;background: none; color: #0d6aad">--}}
                                            {{--<i class="fa fa-remove"></i>--}}
                                        {{--</button>--}}
                                    {{--</form>--}}
                                {{--</td>--}}
                            </tr>
                            </tr>
                        @endforeach
                        @endif

                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->



                <!--

                <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Дата</th>
                            <th>Магазин</th>
                            <th>Название</th>
                            <th>Статус</th>
                            <th>Цена</th>
                            <th>Цена с доставкой</th>

                            <th>Наличными</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(!isset($orders)) <?php $orders = []; ?> @endif

                        @foreach($orders as $item)
                            <tr {{ $item->status == 'Ожидает' ? 'bgcolor=pink' : ''  }} {{ $item->status == 1 ? 'bgcolor=lightgreen' : ''  }} >
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->getShop() ? $item->getShop()->title : ''  }}</td>
                                <td>{{ $item->tovar_name }}</td>
                                <td>{{ $item->getStatus() }}</td>
                                <td> {{ $item->tovar_price }}</td>
                                <td>{{ $item->getMeta('total') }}</td>


                                <td>{{ $item->typeBill() }}</td>


                                <td>
                                    <form action="{{ route('orders.update',['id'=>$item->id]) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">

                                        <button style="float: left;border: 0;background: none; color: #0d6aad"
                                                type="submit" class="fa fa-check delete" style="float: left;">


                                        </button>
                                    </form>


                                    <form action="{{route('orders.destroy',['id'=>$item->id])}}" method="post">
                                        @csrf

                                        <input type="hidden" name="_method" value="delete">
                                        <button onclick="return confirm('are you sure?')" type="submit" class="delete"
                                                style="float: left;border: 0;background: none; color: #0d6aad">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tr>
                        @endforeach

                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Детали заказа</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body" style="font-size:18px; font-weight:400;">
                    @if(isset($item))
                    <b>Общая цена</b>:  {{ $item->getMeta('total') }} сум<br>
                    <b>Имя клиента</b>:  {{ $item->getMeta('name_customer') }} <br>
                    <b>E-mail клиента</b>:  {{ $item->getMeta('email_customer') }} <br>
                    <b>Телефон клиента</b>:  {{ $item->getMeta('phone_customer') }} <br>
                    <b>Адрес клиента</b>:  {{ $item->getMeta('address_customer') }} <br>
                    <b>Пожелания клиента</b>:  {{ $item->getMeta('text_customer') }} <br>
                    <b>Доставка</b>:  {{ $item->getMeta('delivery') == 'on' ? 'Доставка' : 'Самовызов' }} <br>
                    @else
                        Пусто
                    @endif

                </div><!-- /.box-body -->


            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection