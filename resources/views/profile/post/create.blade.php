@extends("main.main")








@section('content')

@if ($errors->any())
    <div class="container">
    	<div class="row">
    		<div class="col-md-10">
    			<div class="alert alert-danger">
			        <ul style="
    background: red;
    color: white;
    padding: 0;
    list-style: none;
    margin: 0;
    margin-top: 24px;
    padding: 10px;
">
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
    		</div>
    	</div>
    </div>
@endif


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
                    
                    @if($shops->count())
                    
                    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$user_id}}" name="user_id">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            @lang('home.profile_products-add')
                        </h3>
                    </div>


                    <div class="bs-example bs-example-tabs">

<div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                     @lang('home.profile_products-name')
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""  name="title">
                            </div>

             <!--                <div class="form-group">
                                <label for="exampleInputEmail1">
                                     @lang('home.profile_products-name') EN
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""  name="title_en">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                     @lang('home.profile_products-name') UZ
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""  name="title_uz">
                            </div> -->

                            <div class="form-group">
                                <label>@lang('home.shop')</label>
                                <select class="form-control select2" style="width: 100%;"name="shop_id">
                                   @foreach($shops as $item)
                                            <option value="{{$item->id}}">{{$item->getTitle()}}</option>

                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>@lang('home.profile_products-cat')</label>
                                <select class="form-control select2" style="width: 100%;"name="category_id">
                                   @foreach($cat as $item)
                                            <option value="{{$item->id}}">{{$item->getTitle()}}</option>

                                        @endforeach
                                </select>
                            </div>


                                                        <div class="form-group">
                                <label>
                                    @lang('home.products-sale')
                                    <input 
                                        name="is_sale" 
                                     
                                        type="checkbox"
                                        >
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    @lang('home.profile_products-is_hits')
                                    <input 
                                        name="is_hits" 
                                        
                                        type="checkbox"
                                        >
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.price')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" onkeyup="this.value = this.value.replace(/[^0-9]+$/, '')"  >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.sale')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="label" >
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">@lang('home.picture')</label>
                                <input type="file" id="exampleInputFile" name="img">

                                <p class="help-block">png,jpeg,jpg @lang('home.size') 400x266</p>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.meta')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_key" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.meta2')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_desc" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.product_desc')</label>
                                <textarea name="anonce" id="editor" cols="30" rows="10" class="form-control" ></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.product_fulldesc')</label>
                                <textarea  id="" cols="30" rows="10" class="form-control" name="text"></textarea>
                            </div>
                        </div>
                    </div>







                    </div>



                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-success pull-right" type="submit">
                            @lang('home.add')
                        </button>
                    </div>
                    <!-- /.box-footer-->
                </div>

            </form>
            @else
            <br>
            <p></p>
                <h3 align="center" style="font-size: 28px;">@lang('home.first_add_shop')</h3>
                <p align="center" >
                    <br>
                    <a href="{{ route('seller-shops.create') }}" class="btn btn-success">
                             @lang('home.add')
                        </a>
                        </p>
            @endif

                    
                </div>
                </div>
            </div>
        </section>
@endsection