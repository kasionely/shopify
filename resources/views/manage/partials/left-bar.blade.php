<section class="left-bar">
    <nav class="left-bar-nav">
        <ul class="left-bar-nav-group">
            <li class="left-bar-nav-item">
                <a href="{{ route('manage.index') }}" class="left-bar-nav-item-link">
                    <img src="/icons/home.svg" alt="" class="svg">
                    <span class="left-bar-nav-item-link-label">Главная</span>
                </a>
            </li>
            <li class="left-bar-nav-item">
                <a href="{{ route('manage.product.list') }}" class="left-bar-nav-item-link">
                    <img src="/icons/list.svg" alt="" class="svg">
                    <span class="left-bar-nav-item-link-label">Товары</span>
                </a>
            </li>
            <li class="left-bar-nav-item">
                <a href="{{ route('manage.category.list') }}" class="left-bar-nav-item-link">
                    <img src="/icons/list.svg" alt="" class="svg">
                    <span class="left-bar-nav-item-link-label">Категории</span>
                </a>
            </li>
        </ul>
    </nav>
</section>