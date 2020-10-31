@extends("main.main")








@section('content')

            <section class="user-cabinet beauty-wrapper">
            <div class="row">
                <div class="small-12 medium-12 columns">
                    <h1 class="title hide-for-small-only hide-for-medium-only hide-for-large-only"> 
                    @lang('home.profile_my') </h1>
                </div>

  <div class="small-12 medium-3 columns">
                @include("profile.lib.left")
</div>

                <div class="small-12 medium-9 columns details">
                    <form method="post" action="{{route('products.update',['id'=>$sl->id])}}" enctype="multipart/form-data">
                @csrf
{{ method_field('PUT') }}
                <!-- Default box -->
               
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    @lang('home.profile_products-name')
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $sl->title }}" name="title">
                            </div>

                            <div class="form-group">
                                <label>@lang('home.profile_shop')</label>
                                <select class="form-control select2" style="width: 100%;"  name="shop_id">
                                    @foreach($shops as $item)
                                        <option
                                               @if($sl->shop_id == $item->id)
                                                    selected
                                               @endif
                                                value="{{$item->id}}">{{ $item->title }}</option>

                                    @endforeach
                                </select>
                            </div>

<br>
                            <div class="form-group">
                                <label>@lang('home.cats')</label>
                                <select class="form-control select2" style="width: 100%;"  name="category_id">
                                    @foreach($cat as $item)
                                        <option
                                                @if($item->id == $sl->cat_id) selected="selected"

                                                @endif
                                                value="{{$item->id}}">{{ $item->title }}</option>

                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>
                                    @lang('home.sale')
                                    <input 
                                        name="is_sale" 
                                        @if($sl->is_sale) 
                                            checked
                                        @endif
                                        type="checkbox"
                                        >
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                     @lang('home.profile_products-is_hits')
                                    <input 
                                        name="is_hits" 
                                        @if($sl->is_hits) 
                                            checked
                                        @endif
                                        type="checkbox"
                                        >
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> @lang('home.price')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{ $sl->price ? $sl->price : $sl->price }}" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    @lang('home.sale')
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="label" value="{{ $sl->label}}" >
                            </div>


                            <div class="form-group">
                                <img src="{{ $sl->getImage() }}" alt="" width="200">
                                <label for="exampleInputFile">@lang('home.picture')</label>
                                <input type="file" id="exampleInputFile" name="img">

                                <p class="help-block">png,jpeg,jpg @lang('home.size') 400x266</p>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.meta')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_key" value="{{ $sl->meta_key }}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.meta2')</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_desc" value="{{ $sl->meta_desc }}" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.product_desc')</label>
                                <textarea name="anonce" id="editor" cols="30" rows="10" class="form-control" >{{ $sl->anonce }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('home.product_fulldesc')</label>
                                <textarea  id="" cols="30" rows="10" class="form-control" name="text">{{ $sl->text }}</textarea>
                            </div>
                        </div>
                    </div>


                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-success pull-right" type="submit">@lang('home.add')</button>
                    </div>
                    <!-- /.box-footer-->
                </div>

            </form>

                    
                </div>
                </div>
            </div>
        </section>
@endsection