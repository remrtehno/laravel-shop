@extends("main.main")








@section('content')

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
                    <form method="post" action="{{route('seller-shops.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            @lang('home.shop_add')
                        </h3>
                    </div>


                    <div class="bs-example bs-example-tabs">


                        <div class="box-body row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                         @lang('home.name') *
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title">
                                </div>

                               
                            </div>

   <!--                          <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                         @lang('home.name') EN
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title_en">
                                </div>

                               
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                         @lang('home.name') UZ
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title_uz">
                                </div>

                               
                            </div> -->

                           

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        @lang('home.address') *
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="address">
                                </div>

                               
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        @lang('home.map')
                                    </label>
                                    <input type="text" class="form-control" placeholder="41.77382, 60.883214" id="exampleInputEmail1" placeholder="" name="map">
                                </div>


                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                      @lang('home.phone') *
                                    </label>
                                    <input type="text" class="form-control" placeholder="+998901232323" id="exampleInputEmail1" placeholder="" name="phone">
                                </div>


                            </div>



                             <div class="col-md-12">
                                    <label for="exampleInputFile">
                                           @lang('home.picture') 
                                    </label>
                                    <input type="file" id="exampleInputFile" name="img">

                                    <p class="help-block">jpeg,png,jpeg</p>
                                    <p class="help-block">
                                     @lang('home.size')

                                      400x266</p>
                                </div>

 <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('home.orders_desc')</label>
                                    <textarea name="anonce" id="editor" cols="30" rows="10" class="form-control" ></textarea>
                                </div>
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