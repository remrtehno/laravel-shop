@extends("admin.main.main")

@section("content")


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Магазины
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
   
                
 <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{ route('shops.create') }}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Телефон</th>


                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($shops as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->phone }}</td>
                           
              


                            <td>
                                <img src="{{ $item->getImage() }}" alt="" width="100">
                            </td>
                            <td><a href="{{ route('shops.edit',['id'=>$item->id]) }}" class="fa fa-pencil" style="float: left;"></a>

                               

                                    
                                    @if($item->products_count)
                                        <button onclick="return confirm('Вы не можете удалить магазин так как в нем есть товары, сначала удалите товары.')" type="submit" class="delete" style="float: left;border: 0;background: none; color: #0d6aad">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    @else 
                                         <form action="{{route('shops.destroy',['id'=>$item->id])}}" method="post">
                                            <input type="hidden" name="_method" value="delete">
                                        @csrf
                                        <button onclick="return confirm('Вы уверены?')" type="submit" class="delete" style="float: left;border: 0;background: none; color: #0d6aad">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                        </form>
                                    @endif
                                
                                <a href="{{ route('shopshow',['id'=>$item->id]) }}"> Товары магазина </a>
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





   

            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection