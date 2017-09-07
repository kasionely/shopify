<nav class="site-header hidden-xs">
    <div class="site-header-content">
        <div class="site-header-content-left">
            <a href="{{ route('shop.index') }}" class="site-header-logo">INDIEGOGO</a>
            <nav role="navigation" class="site-header-links">
                <a href="#" class="site-header-link">Explore</a>
                <a href="#" class="site-header-link">For Entrepreneurs</a>
                <a href="#" class="site-header-link">Equity Offerings</a>
            </nav>
            <div class="site-header-search">
                <form action="" class="site-header-search-form">
                    <input type="text" class="search-field">
                </form>
            </div>
        </div>
        <div class="site-header-content-right">
            <a href="{{ route('basket.list') }}" class="compaign-btn">Корзина
                <span class="counter"> {{ Session::has('basket') ? Session::get('basket')->totalQty : '' }}</span>
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