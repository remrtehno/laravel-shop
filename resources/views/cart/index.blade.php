@extends("main.main")









@section('content')

<section class="user-cabinet beauty-wrapper">
            <div class="row">





                <div class="small-12 medium-12 columns">
                    <h3 align="center" style="color: #000" class="mb-5"> Оформление заказа </h3>
                </div>
                <div class="small-12 medium-12 columns details basket">
                    <div class="latest-orders cabinet-block"><table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-left">Название товара</td>
                                    <td class="text-left">Количество</td>
                                    <td class="text-right">Цена за единицу товара</td>
                                    <td class="text-right">Всего</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Cart::count()) 
                                <?php foreach(Cart::content() as $row) :?>

                                    <tr>
                                        <td>
                                            <p><strong><?php echo $row->name; ?></strong></p>
                                            <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                                        </td>
                                        <td>
                                            <form action="{{route('basket.update', ['id'=>$row->rowId])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    {{ method_field('PUT') }}
                                                <input type="hidden" name="rowId" value="{{$row->rowId}}">
                                             <div class="input-group btn-block" style="max-width: 200px"> <input type="text" onkeyup="this.value = this.value.replace (/[^0-9]+$/, '')" name="quantity" value="<?php echo $row->qty; ?>" size="1" class="form-control"> <span class="input-group-btn">                          <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Обновить">                            <i class="fa fa-redo"></i>                          </button>
                                                </form>
                                        <form action="{{route('remove',['id'=>$row->rowId])}}" method="get">
                                                    @csrf
                                                    <button onclick="return confirm('are you sure?')" type="submit" class="btn btn-danger" ><i class="fa fa-times-circle"></i></button>
                                                </form>


                                            </span> </div>

                                        </td>
                                        <td><?php echo $row->price; ?> сум</td>
                                        <td><?php echo $row->total; ?> сум</td>
                                    </tr>

                                <?php endforeach;?>
                                @else
                                <tr>
                                    <td colspan="4">
                                        <h3 align="center">Корзина пустая, добавьте товары</h3>
                                    </td>
                                </tr> 
                                @endif
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="row">
                    @if(Cart::count()) 
                        <div class="col-sm-4 offset-sm-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Итого:</strong></td>
                                        <td class="text-right">{{Cart::priceTotal()}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Всего:</strong></td>
                                        <td class="text-right">{{Cart::priceTotal()}}</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div class="buttons clearfix">
                    <div class="pull-left"> <a href="/" class="btn btn-default"> Продолжить покупки </a> </div>
                     @if(Cart::count()) 
                    <div class="pull-right"> <a href="{{route('checkout')}}" class="btn btn-primary"> Оформление заказа </a> </div>
                    @endif
                </div>
                </div>
            </div>
        </section>



@endsection


@section('footerinput')
    @include("lib.footerinput")
@endsection