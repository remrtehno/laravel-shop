@extends("main.main")



@section('content')
    <section class="shop">
        <div class="container">
            <div class="row">
                @foreach($shops as $item)
                    <div class="col-md-3">
                        <section class="shop-item">
                            <h4 class="sc_title sc_title_regular" >
                                <a href="{{ route('shop-detail',['slug'=>$item->slug]) }}">
                                    {{ $item->title }}
                                </a>
                            </h4>
                            <a href="{{ route('shop-detail',['slug'=>$item->slug]) }}"> <img src="{{ $item->getImage() }}" alt=""></a>
                                <div class="wpb_text_column wpb_content_element  custom_1432116266774">
                                <div class="wpb_wrapper">
                                <p><p>{!! str_limit($item->anonce,350) !!}  </p></p>
                                <a href="{{ route('shop-detail',['slug'=>$item->slug]) }}" class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link">
                                <span class="button-up">Подробно</span>
                                <i class="fas fa-arrow-alt-circle-right" style="margin-left: 5px;"></i> 
                                </a>
                            </div>
                            </div>
                        </section>
                    </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.shop -->
@include('lib.advantages')


@endsection

