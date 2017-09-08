<nav class="site-header hidden-xs">
    <div class="site-header-content">
        <div class="site-header-content-branding">
            <a href="{{ route('manage.index') }}">
                <img src="/images/logo.png" alt="Manage Logo" class="manage-logo">
            </a>
        </div>
        <div class="site-header-content-list">
            <div class="site-header-search">
                <section class="top-bar-search">
                    <div class="top-bar-search-input-wrap">
                        <div class="next-input-stylized">
                            <span class="">
                                <svg class="search-icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#next-search-reverse"></use>
                                </svg>
                            </span>
                            <div class="navigation-search-wrap">
                                <input type="search" class="navigation-search" placeholder="Поиск">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="site-header-profile">
                <button class="top-bar-profile-btn">
                    <div class="top-bar-profile">
                        <div class="top-bar-profile-avatar">
                            <span class="user-avatar">
                                <img src="/images/user-blank.png" alt="user-avatar">
                                <span class="user-avatar-text">
                                    AL
                                </span>
                            </span>
                        </div>
                        <div class="top-bar-profile-content">
                            <p class="top-bar-profile-title">admin@kupi.kz</p>
                            <p class="top-bar-profile-description">Интернет магазин</p>
                        </div>
                    </div>
                </button>
                <div class="popover">
                    <div class="popover-wrap">
                        <ul class="popover-list">
                            <li class="popover-list-item">
                                <a href="{{ route('manage.logout') }}" class="popover-list-item-action">Выйти</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>