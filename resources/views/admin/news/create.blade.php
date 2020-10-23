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
            <form method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                @csrf
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Добавляем Новость</h3>
                    </div>


                    <div class="bs-example bs-example-tabs">


                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Картинка</label>
                                    <input type="file" id="exampleInputFile" name="img">

                                    <p class="help-block">jpeg,png,jpeg</p>
                                    <p class="help-block">размер 360x216</p>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Мета-ключевые слова, через запятую</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_key">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Мета-описание</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_desc">
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