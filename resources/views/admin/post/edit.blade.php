@extends('admin.main.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить Статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        @include('admin.errors')
        <!-- Default box -->

            <form action="{{route('post.update',['id'=>$sl->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем Продукт</h3>
                    </div>




                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $sl->title }}" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя EN</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $sl->title_en }}" name="title_en">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя UZ</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $sl->title_uz }}" name="title_uz">
                            </div>

                            <div class="form-group">
                                <label>Категория</label>
                                <select class="form-control select2" style="width: 100%;" size="{{count($cat)}}" name="category_id">
                                    @foreach($cat as $item)
                                        <option
                                                @if($item->id == $sl->cat_id) selected="selected"

                                                @endif
                                                value="{{$item->id}}">{{ $item->title }}</option>

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
                                        @if($sl->is_sale) 
                                            checked
                                        @endif
                                        type="checkbox"
                                        >
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    Лучшее предложение
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
                                <label for="exampleInputEmail1">Цена</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{ $sl->price ? $sl->price : $sl->price }}" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Скидка</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="label" value="{{ $sl->label}}" >
                            </div>


                            <div class="form-group">
                                <img src="{{ $sl->getImage() }}" alt="" class="img-responsive" width="200">
                                <label for="exampleInputFile">Картинка</label>
                                <input type="file" id="exampleInputFile" name="img">

                                <p class="help-block">png,jpeg,jpg размер 400x266</p>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Мета-ключевые слова, через запятую</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_key" value="{{ $sl->meta_key }}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Мета-описание</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_desc" value="{{ $sl->meta_desc }}" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="anonce" id="editor" cols="30" rows="10" class="form-control" >{{ $sl->anonce }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea  id="" cols="30" rows="10" class="form-control" name="text">{{ $sl->text }}</textarea>
                            </div>
                        </div>
                    </div>






                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" name="_method" value="put">
                        <button class="btn btn-default">Назад</button>
                        <button class="btn btn-warning pull-right" type="submit">Изменить</button>
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