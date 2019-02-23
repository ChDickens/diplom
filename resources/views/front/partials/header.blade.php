<div class="header-upper-panel">
    <div class="container">
        <a href="#" class="header-upper-logo">Техномарт</a>
        <div class="header-upper-search">
            <form action="{{ route('search') }}" method="post">
                {{ csrf_field() }}
                <input type="search" name="q" id="search" placeholder="Поиск:" required>
                <label for="search"></label>
            </form>
        </div>
        <a href="#" class="header-upper-bookmark">Закладки: 0</a>
        <a href="#" class="header-upper-cart">Корзина: 0</a>
        <a href="#" class="header-upper-order">Оформить заказ</a>
    </div>
</div>
<div class="container">
    <div class="header-middle-panel clearfix">
        <p class="header-middle-block header-middle-about">Интернет-магазин строительных материалов и инструментов для ремонта</p>
        <div class="header-middle-contacts">
            <p class="header-contacts-telephone">{{ $setting->phone }}</p>
            <p class="header-contacts-address">{{ $setting->adres }}</p>
        </div>
        <div class="header-middle-user header-user-connected">
            <a href="#" class="header-user-login">Войти</a>
            <a href="#" class="header-user-registration">Регистрация</a>
        </div>
    </div>
    <nav class="header-bottom-panel">
        @foreach($menu as $item)
            <a href="{{ $item->slug }}">{{ $item->title }}</a>
        @endforeach
    </nav>
</div>