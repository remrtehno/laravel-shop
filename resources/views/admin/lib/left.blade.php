<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>

    <li><a href="{{ route('post.index') }}"><i class="fa fa-sticky-note-o"></i> <span>Продукция</span></a></li>
    <li><a href="{{ route('shops.index') }}"><i class="fa fa-sticky-note-o"></i> <span>Магазины</span></a></li>
    <li><a href="{{ route('category.index') }}"><i class="fa fa-list-ul"></i> <span>Категории</span></a></li>
    <li><a href="{{ route('slider.index') }}"><i class="fa fa-tags"></i> <span>Слайдер</span></a></li>

    <li><a href="{{ route('logo.index') }}"><i class="fa fa-tags"></i> <span>Логотип</span></a></li>
    <li><a href="{{ route('statisics.index') }}"><i class="fa fa-tags"></i> <span>Статистика</span></a></li>
<li><a href="{{ route('orders.index') }}"><i class="fa fa-tags"></i> <span>Заказы</span>  <span class="badge orders-count" style="background: red;"></span> </a></li>
    <li><a href="{{ route('about.index') }}"><i class="fa fa-users"></i> <span>О нас</span></a></li>
    <li><a href="{{ route('contact.index') }}"><i class="fa fa-users"></i> <span>Контакты</span></a></li>
    <li><a href="{{ route('news.index') }}"><i class="fa fa-users"></i> <span>Настройки магазина</span></a></li>
    <li>
        <a href="/public/adminfaz/#">
            <i class="fa fa-commenting"></i> <span>Комментарии</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">5</small>
            </span>
        </a>
    </li>
</ul>