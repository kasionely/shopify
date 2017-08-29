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
            <a href="#" class="compaign-btn">Start a campaign</a>
            <nav role="navigation" class="site-header-links">
                @if (Auth::user())
                    <a href="#" class="site-header-link">Profile</a>
                    <a href="#" class="site-header-link">Manage</a>
                @else
                    <a href="#" class="site-header-link">Sign Up</a>
                    <a href="#" class="site-header-link">Log In</a>
                @endif
            </nav>
        </div>
    </div>
</nav>