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
                    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$user_id}}" name="user_id">

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
                        <button class="btn btn-success pull-right" type="submit">Добавить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>

            </form>

                    
                </div>
                </div>
            </div>
        </section>
@endsection