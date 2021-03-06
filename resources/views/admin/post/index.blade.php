@extends("admin.main.main")

@section("content")


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
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
                        <a href="{{ route('post.create') }}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Категория</th>
                            <th>Магазин</th>

                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($prod as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td> <b>{{ $item->title }}</b> <!-- br>  <b>en:</b> {{ $item->title_en }} <br> <b>uz:</b> {{ $item->title_uz }} -->
                            </td>
                           
                            <td>{{ $item->price ? $item->price : 0 }} <br> 
                                 @if($item->label)
                                     <b>{{ $item->label }}% скидка</b>
                                @endif
                            </td>
                            <td>
                                @if($item->category)
                                {{ 
                                $item->category->title }}
                                @else 
                                -
                            @endif
                        </td>
                            <td>
                                {{$item->getShopByProduct() ? $item->getShopByProduct()->title : '-'}}
                            </td>

                            <td>
                                <img src="{{ $item->getImage() }}" alt="" width="100">
                            </td>
                            <td><a href="{{ route('post.edit',['id'=>$item->id]) }}" class="fa fa-pencil" style="float: left;"></a>

                                <form action="{{route('post.destroy',['id'=>$item->id])}}" method="post">
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