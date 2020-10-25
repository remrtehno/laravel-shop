@extends('admin.main.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить статью

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            @include('admin.errors')
            <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                <input type="hidden" value="{{$user_id}}" name="user_id">
                @csrf
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Добавляем статью</h3>
                    </div>




                    <div class="bs-example bs-example-tabs">


                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""  name="title">
                            </div>

                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control select2" style="width: 100%;"name="category_id">
                                   @foreach($cat as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>

                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Магазин</label>
                                <select class="form-control select2" style="width: 100%;" name="shop_id">


                                    @foreach($shops as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>

                                    @endforeach

                                </select>
                            </div>



                                                                            <div class="form-group">
                                <label>
                                    Распродажа
                                    <input 
                                        name="is_sale" 
                                     
                                        type="checkbox"
                                        >
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    Лучшее предложение
                                    <input 
                                        name="is_hits" 
                                        
                                        type="checkbox"
                                        >
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Цена</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Скидка</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="label" >
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Картинка</label>
                                <input type="file" id="exampleInputFile" name="img">

                                <p class="help-block">png,jpeg,jpg размер 400x266</p>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Мета-ключевые слова, через запятую</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_key" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Мета-описание</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_desc" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="anonce" id="editor" cols="30" rows="10" class="form-control" ></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea  id="" cols="30" rows="10" class="form-control" name="text"></textarea>
                            </div>
                        </div>
                    </div>








                    </div>



                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-default">Назад</button>
                        <button class="btn btn-success pull-right" type="submit">Добавить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>

            </form>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection