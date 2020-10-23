@extends('layouts.app')


<style>
                #ber {
                  opacity: 0;
  position: absolute;
        display: block !important;    
            }
            .invalid-feedback {
                display: block !important;
            }
</style>

@section('content')
 <section class="registr shadow_bc">
    <form method="POST" action="{{ route('register') }}"  class="registr niked">
                        @csrf

                <a href="{{ url('/') }}" class="logo_reg">

                            <img src="/public/uploads/logo/logo.png">

                </a>

                <h1>Добро пожаловать</h1>
                <p> Зарегистрируйтесь на сайте с помощью номером телефона или E-mail или через социальную сеть </p>

                <div class="form-group">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" class="form-control tel_uz" required autocomplete="name" autofocus placeholder="+998xx-xx-xx-xx">

 </div>

@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                <div class="form-group"> 
                    <select name="role">
                        <option value="seller">Продавец</option>
                        <option value="customer">Покупатель</option>
                    </select>
                </div>

                <div class="form-group"> <input type="text" name="email" class="form-control" value="" placeholder="Введите E-mail" /> </div>
@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                <div class="form-group"> <input type="password" name="password" class="form-control" placeholder="Пароль" value="" /> </div>
                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

               <div class="form-group">
                          


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{__('Подтвердите пароль') }}" autocomplete="new-password">

                        </div>

                <div class="agree_ser"> <input type="checkbox" required name="agree" id="ber" value="0" style="display: none" /> <label for="ber"> Я соглашаюсь с <a href="https://bisyor.uz/terms" target="_blank"> правилами использования сервиса </a> , а также с передачей и обработкой моих данных* </label> </div> <button type="submit" class="more_know blue"> Зарегистрироваться </button>
            </form>
            <div class="reg_bottom">
                <p>© 2018-2020 site - Все права защищены</p>
                <p> По вопросам: <a href="mailto:info@site.uz">info@site.uz</a> </p>
            </div>
        </section>


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
