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

                                    <button style="float: left;border: 0;background: none; color: #0d6aad" type="submit" class="fa fa-check delete" style="float: left;">


                                    </button>
                                </form>
                                    


                                <form action="{{route('orders.destroy',['id'=>$item->id])}}" method="post">
                                    @csrf

                                    <input type="hidden" name="_method" value="delete">
                                    <button onclick="return confirm('are you sure?')" type="submit" class="delete" style="float: left;border: 0;background: none; color: #0d6aad">
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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection