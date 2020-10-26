@extends("admin.main.main")

@section("content")


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Статистика
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
                <div class="box" style="padding: 20px 20px; padding-bottom: 10px; margin: 0; margin-top: 15px;">
                    @foreach($shops as $key => $item)

                    <form action="{{route('statisics.show', ['id' => $item->id])}}" method="get">
                        @csrf
                        <input type="hidden" name="to" value="" placeholder="до" style="float: right;">
                        <input type="hidden" name="from" value="">

                        <button style="float: right;">Сбросить фильтр</button>


                        </form>


                        <form action="{{route('statisics.show', ['id' => $item->id])}}" method="get">
                        @csrf
                        <h4 align="center" style="float: left;">Выберите дату</h4>
                        <button style="float: right;">Показать</button>

                        <input class="datapicker" data-date-format="mm/dd/yyyy" name="to" value="{{ $to }}"
                        placeholder="до" style="float: right;">
                        <input class="datapicker" data-date-format="yyyy-mm-dd " name="from" value="{{ $from }}"
                        placeholder="от" style="float: right;">
                        <div style="clear: both;"></div>
                    </form>
                        @endforeach

                </div>


                <div class="box" style="padding: 20px 20px; padding-bottom: 10px; margin: 0; margin-top: 15px;">

                    @foreach($shops as $key => $item)

                        <h3>{{$item->title}}</h3>


                    @if(count($item->statisticsByDate($from, $to)))
                        <br>


                        <div class="clearfix"></div>


                        <div class="box">


                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Дата</th>
                                    <th>Количество</th>
                                    <th>Цена</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach( $item->statisticsByDate($from, $to) as $val)
                                    <tr>
                                        <td>
                                            <b> @if($from || $to)
                                                    {{ $from ? 'от' : '' }} {{$from}} {{ $to ? 'до' : '' }} {{ $to }}
                                                @else
                                                    За сегодня
                                                @endif
                                            </b>
                                        </td>
                                        <td>
                                            {{ $val->cnt }}
                                        </td>
                                        <td>
                                            {{ $val->price ? $val->price : '0' }} сум <br>
                                            <b>Ваш доход:</b> {{ $val->price ? $val->price * $precentage->text : '0' }}сум.
                                        </td>
                                    </tr>
                                @endforeach

                                @foreach( $item->statistics() as $val)
                                    <tr>
                                        <td>
                                            <b> Общее за все время</b>
                                        </td>
                                        <td>
                                            {{ $val->cnt }}
                                        </td>
                                        <td>
                                            {{ $val->price ? $val->price : '0' }} сум <br>
                                            <b>Ваш доход:</b> {{ $val->price ? $val->price * $precentage->text : '0' }}сум.
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box -->




                    @else
                        <td colspan="5"><h3 align="center">Пусто</h3></td>
                    @endif


                    @endforeach
                </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection