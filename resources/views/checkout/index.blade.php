@extends("main.main")









@section('content')

<section class="user-cabinet beauty-wrapper">
            <div class="row">





                <div class="small-12 medium-12 columns">
                    <h3 align="center" style="color: #000" class="mb-5"> @lang('home.checkout') </h3>
                </div>
                <div class="small-12 medium-12 columns details basket">
                    <form action="{{route('makeOrder')}}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="latest-orders cabinet-block">
                        <div class="row" style="max-width: 600px;">
                            <div class="col-md-12">
                                <h4>@lang('home.detail_order')</h4>
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="input-group-addon" id="basic-addon1">@lang('home.name')</div>
                                <input type="text" class="form-control" name="name_customer" value="{{$user = Auth::user() ? Auth::user()->name : ''}}">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="input-group-addon" id="basic-addon1">Email</div>
                                <input type="text" class="form-control" name="email_customer" value="{{$user = Auth::user() ? Auth::user()->email : ''}}">
                            </div><!-- /.col-md-6 -->
                             <div class="col-md-12">
                                <div class="input-group-addon" id="basic-addon1">@lang('home.phone')</div>
                                <input type="text" class="form-control" name="phone_customer" value="{{$user = Auth::user() ? Auth::user()->phone : ''}}">
                            </div><!-- /.col-md-12 -->
                             <div class="col-md-12">
                                <div class="input-group-addon" id="basic-addon1">@lang('home.address')</div>
                                <input type="text" class="form-control" name="address_customer">
                            </div><!-- /.col-md-12 -->
                             <div class="col-md-12">
                                <div class="input-group-addon" id="basic-addon1">@lang('home.detail_order')</div>
                                <textarea type="text" class="form-control" name="text_customer"></textarea>
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <h5 style="float: left; width: 100%;">@lang('home.Wishes_to_order')</h5>
                                <label>
                                    <b>@lang('home.Self_call')</b>
                                    <input checked style="float: left; margin-top: 5px;" type="radio" class="form-control delivery"  name="delivery">
                                </label>
                                <div class="clearfix"></div>

                                <label>
                                    <b>@lang('home.Delivery')</b>
                                    <input style="float: left; margin-top: 5px;" data-amount="{{$delivery->text}}" type="radio" class="form-control delivery"  name="delivery">
                                </label>


                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th align="center" scope="row">@lang('home.total2')</th>
                                        <td align="center">
                                            <b class="total">{{ preg_replace('/\,/', '',Cart::subtotal(0)) }}</b> сум
                                            <input type="hidden" data-total="{{ preg_replace('/\,/', '',Cart::subtotal(0)) }}" value="{{ preg_replace('/\,/', '',Cart::subtotal(0)) }}" class="total" name="total">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                {{--<input style="float: left; margin-top: 5px;" type="radio" class="form-control"  name="delivery">--}}
                                {{--<label style="float: left;" class="input-group-addon" name="delivery" for="delivery" id="basic-addon1">Оплата наличными</label>--}}
                                
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                    </div>

              

                <div class="buttons clearfix">
                    <div class="pull-left"> <a href="/" class="btn btn-default"> @lang('home.buy_more') </a> </div>
                     @if(Cart::count()) 
                    <div class="pull-right"> <button  class="btn btn-primary"> @lang('home.continue') </button> </div>
                    @endif
                </div>
            </form>
                </div>
            </div>
        </section>



@endsection


@section('footerinput')
    @include("lib.footerinput")
@endsection