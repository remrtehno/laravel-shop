@extends("main.main")








@section('content')

            <section class="user-cabinet beauty-wrapper">
            <div class="row">
                <div class="small-12 medium-12 columns">
                    <h1 class="title hide-for-small-only hide-for-medium-only hide-for-large-only"> @lang('home.profile_my') </h1>
                </div>
  <div class="small-12 medium-3 columns">
                @include("profile.lib.left")
</div>

                <div class="small-12 medium-9 columns details">
                    <div class="latest-orders cabinet-block">
                        <h4 class="widget-title">@lang('home.profile_my')</h4>

                        <form class="profile-form" method="post" action="{{route('users.update', $user)}}">
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <input type="hidden" name="user_id" value="{{ Auth::user() && Auth::user()->id }}">
                            <div class="field-row">
                                <div class="form-group has-feedback has-success"> <label> <span class="field-label required">                                            
                                @lang('home.full_name')                                            <strong class="required">*</strong>                                        </span> </label>
                                    <div class="form-field"> <input type="text" name="name" value="{{ $user->name }}" maxlength="255" class="text-field" placeholder="Ф.И.О."  /> </div>
                                </div>
                            </div>

                            <div class="field-row">
                                <div class="form-group has-feedback has-success"> <label>@lang('home.phone')</label>
                                    <div class="form-field"> 
                                        <input type="hidden" name="phone" value="+99890 xxx-xx-xx" disabled="" maxlength="255" class="text-field" placeholder="" />
                                        <div class="mask-field no-mask full"> <input name="phone" type="text" placeholder="+99890 xxx-xx-xx" value="{{ $user->phone }}" class="text-field"/> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-row">
                                <div class="form-group has-feedback has-success"> <label>Email</label>
                                    <div class="form-field"> <input type="email" name="email" value="{{ $user->email }}" maxlength="255" class="text-field" placeholder="Адрес эл. почты" /> </div>
                                </div>
                            </div> <button type="submit" class="save-button expanded success button"> @lang('home.save') </button>
                        </form>
                    </div>
                    <div class="user-achievements">
                        <h4 class="widget-title"> <i class="fa fa-trophy fa-absolute left" aria-hidden="true"></i> Достижения покупок </h4>
                        <h3> Заказывайте больше и получайте достижения! <br />                            С каждым достижением растет ваша скидка! Самые выгодные покупки у                            Магната! </h3>
                        <div class="achievement-status">
                            <div class="status-container">
                                <div class="row align-right">
                                    <div class="small-11 columns">
                                        <ul class="no-bullet row">
                                            <li class="achieved">
                                                <div class="top-label"><label>Новичек</label></div>
                                                <div class="bottom-label"> 100 000 сумов <br />                                                    Получено 9.12.2016 </div>
                                            </li>
                                            <li class="current-status">
                                                <div class="top-label"><label>Закупщик</label></div>
                                                <div class="bottom-label"> 1 000 000 сумов <br /> <span class="color-blue">Скидка -2%</span> <br />                                                    Получено 9.12.2016 </div>
                                            </li>
                                            <li>
                                                <div class="top-label"><label>Оптовик</label></div>
                                                <div class="bottom-label"> 10 000 000 сумов <br /> <span class="color-blue">Скидка -5%</span> <br />                                                    До получения вам ва не хватает 7 560 890 сумов </div>
                                            </li>
                                            <li>
                                                <div class="top-label"><label>Олигарх</label></div>
                                                <div class="bottom-label"> 50 000 000 сумов <br /> <span class="color-blue">Скидка -7%</span> <br /> </div>
                                            </li>
                                            <li>
                                                <div class="top-label"><label>Магнат</label></div>
                                                <div class="bottom-label"> 100 000 000 сумов <br /> <span class="color-blue">Скидка -9%</span> <br /> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-input-form displayNone">
                        <div class="row align-justify">
                            <div class="columns small-12 medium-5">
                                <div class="edit-password">
                                    <div class="title">Изменить пароль</div>
                                    <form>
                                        <div class="row align-middle">
                                            <div class="small-12 medium-4 columns"> <label for="currentPassword" class="middle"> Изменить пароль </label> </div>
                                            <div class="small-12 medium-8 columns"> <input type="password" id="currentPassword" /> </div>
                                        </div>
                                        <div class="row align-middle">
                                            <div class="small-12 medium-4 columns"> <label for="newPassword" class="middle">Новый пароль</label> </div>
                                            <div class="small-12 medium-8 columns"> <input type="password" id="newPassword" /> </div>
                                        </div>
                                        <div class="row align-middle">
                                            <div class="small-12 medium-4 columns"> <label for="repeatPassword" class="middle"> Введите пароль снова </label> </div>
                                            <div class="small-12 medium-8 columns"> <input type="password" id="repeatPassword" /> </div>
                                        </div>
                                        <div class="row">
                                            <div class="small-8 small-offset-4 columns"> <button class="button green">Сохранить</button> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="columns small-12 medium-5">
                                <div class="edit-user-data">
                                    <div class="title"> Личные данные <a href="#">Изменить адрес доставки</a> </div>
                                    <form>
                                        <div class="row align-middle">
                                            <div class="small-12 medium-4 columns"> <label for="phone" class="middle">Телефон</label> </div>
                                            <div class="small-12 medium-8 columns"> <input type="text" id="phone" /> </div>
                                        </div>
                                        <div class="row align-middle">
                                            <div class="small-12 medium-4 columns"> <label for="name" class="middle">Имя</label> </div>
                                            <div class="small-12 medium-8 columns"> <input type="text" id="name" /> </div>
                                        </div>
                                        <div class="row align-middle">
                                            <div class="small-12 medium-4 columns"> <label for="surname" class="middle">Фамилия</label> </div>
                                            <div class="small-12 medium-8 columns"> <input type="text" id="surname" /> </div>
                                        </div>
                                        <div class="row">
                                            <div class="small-8 small-offset-4 columns"> <button class="button green">Сохранить</button> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection