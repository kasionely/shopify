<nav class="site-header hidden-xs">
    <div class="site-header-content">
        <div class="site-header-content-left">
            <a href="{{ route('shop.index') }}" class="site-header-logo">INDIEGOGO</a>
            <nav role="navigation" class="site-header-links">
                <a href="{{ route('shop.catalog') }}" class="site-header-link">Каталог</a>
                <a href="/delivery" class="site-header-link">Доставка</a>
                <a href="/payment" class="site-header-link">Оплата</a>
            </nav>
            <div class="site-header-search">
                <form action="{{ route('shop.search') }}" method="get" class="site-header-search-form">
                    {{ csrf_field() }}
                    <input type="text" class="search-field" name="searchable" value="{{ isset($searchable) ? $searchable : '' }}">
                    <button type="submit" class="search-icon">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="site-header-content-right">
            <a href="{{ route('basket.list') }}" class="compaign-btn">Корзина
                <span class="counter"> {{ \App\Model\Basket::getBaskets()->count() }}</span>
            </a>
            <nav role="navigation" class="site-header-links">
                @if (Auth::user())
                    <a href="{{ route('user.profile') }}" class="site-header-link">Профиль</a>
                    <a href="{{ route('user.logout') }}" class="site-header-link">Выйти</a>
                @else
                    <a href="{{ route('user.register') }}" class="site-header-link">Регистрация</a>
                    <a href="{{ route('user.login') }}" class="site-header-link">Войти</a>
                @endif
            </nav>
        </div>
    </div>
</nav>