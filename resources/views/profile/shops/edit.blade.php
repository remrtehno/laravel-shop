@extends("main.main")








@section('content')

            <section class="user-cabinet beauty-wrapper">
            <div class="row">
                <div class="small-12 medium-12 columns">
                    <h1 class="title hide-for-small-only hide-for-medium-only hide-for-large-only"> Мой профиль </h1>
                </div>

  <div class="small-12 medium-3 columns">
                @include("profile.lib.left")
</div>

                <div class="small-12 medium-9 columns details">
                    <form method="post" action="{{route('seller-shops.update',['id'=>$sl->id])}}" enctype="multipart/form-data">
                @csrf
{{ method_field('PUT') }}
                <!-- Default box -->
               
                    <div class="box-body row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $sl->title }}" name="title">
                            </div>

                               
                        </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Адрес</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$sl->address }}" name="address">
                                </div>

                               
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Координаты на карте</label>
                                    <input type="text" value="{{$sl->map }}" class="form-control" placeholder="41.77382, 60.883214" id="exampleInputEmail1" placeholder="" name="map">
                                </div>

                               
                            </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Телефон</label>
                                <input type="text" value="{{$sl->phone }}" class="form-control" placeholder="+998901232323" id="exampleInputEmail1" placeholder="" name="phone">
                            </div>


                        </div>

                             <div class="form-group col-md-12">
                                <img src="{{ $sl->getImage() }}" alt="" width="200">
                                <label for="exampleInputFile">Картинка</label>
                                <input type="file" id="exampleInputFile" name="img">

                                <p class="help-block">png,jpeg,jpg размер 400x266</p>
                            </div>

                             

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="anonce" id="editor" cols="30" rows="10" class="form-control" >{{ $sl->anonce }}</textarea>
                            </div>
                        </div>

                       
                    </div>


                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-success pull-right" type="submit">Отправить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>

            </form>

                    
                </div>
                </div>
            </div>
        </section>
@endsection