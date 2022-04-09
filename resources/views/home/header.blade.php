<header>
    <a class="logo" a href="{{route('welcome')}}">
        <img src="https://kfs-menu.ru/images/menu/kofe-kapuchino-0-2-l.png" class="img" width="100" heigth="100" alt="">
        <h2 style="color: black !important;">Vis-A-Vis</h2>
        <h3 style="color: black !important;">Кофейный уголок</h3>
    </a>
    </div>
    @auth
    @if(Auth::user()->role === 'admin')
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown" s>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black !important;">
                    Администрирование
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('admin.product.create') }} " style="color: black !important;">Добавить товар</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.product.index') }}" style="color: black !important;">Все товары</a></li>
                    <li><a class="dropdown-item" href="{{ route('order.all', ['myOrder' => 'admin']) }}" style="color: black !important;">Просмотр заказов</a></li>
                    <li><a class="dropdown-item" href="#">Пользователи</a></li>
                </ul>
            </li>
        </ul>
     </div>
            </nav>
    @endif
    @endauth
    <nav>
        <ul>
            <li><a href="{{route('contact')}}" style="color: black !important;">Контакты</a></li>
            @guest
            <li><a href="{{route('catalog')}}" style="color: black !important;">Каталог</a></li>
            <li><a href="{{route('register')}}" style="color: black !important;">Регистрация</a></li>
            <li><a href="{{route('login')}}" style="color: black !important;">Авторизация</a></li>
            @endguest
            @auth
                @if(Auth::user()->role === 'user')
                    <li><a href="{{route('catalog')}}" style="color: black !important;">Каталог</a></li>
                    <li><a href="{{route('order.all')}}" style="color: black !important;">Мои заказы</a></li>
                @endif
                <li><a href="{{route('cabinet')}}" style="color: black !important;">Личный кабинет</a></li>
                    <li><a href="{{route('order.basket')}}" style="color: black !important;">Корзина</a></li>
                    <li><a href="{{route('logout')}}" style="color: black !important;">Выход</a></li>
            @endauth
        </ul>
    </nav>
</header>
