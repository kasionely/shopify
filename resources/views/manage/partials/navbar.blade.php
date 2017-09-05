<nav class="site-header hidden-xs">
    <div class="site-header-content">
        <div class="site-header-content-left">
            <a href="{{ route('manage.index') }}" class="site-header-logo">Панель администратора</a>
            <nav role="navigation" class="site-header-links">
                <a href="{{ route('manage.product.list') }}" class="site-header-link">Список товаров</a>
                <a href="{{ route('manage.category.list') }}" class="site-header-link">Список Категории</a>
                <a href="#" class="site-header-link">Список пользователей</a>
            </nav>
        </div>
    </div>
</nav>