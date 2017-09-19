@extends('shop.layouts.main')

@section('title')
    Laravel Shopping Cart
@endsection


@section('content')
    @include('shop.partials.carousel')
    <div class="container">
        <div class="content-section">
            <div class="cards-section">
                <div class="cards">
                    @foreach($products as $product)
                        <div class="card">
                            <a href="{{ action('ProductController@view', ['slug' => $product->getSlug(), 'product' => $product]) }}" title="{{ $product->getProductName() }}" class="card-link"></a>
                            <div class="card-image" data-action="">
                                <img src="{{ $product->getProductImage() }}" alt="" class="img-responsive">
                            </div>
                            <div class="card-content">
                                <div class="card-title">{{ $product->title }}</div>
                                <div class="card-description">{!!$product->description!!}</div>
                                <div class="card-price">{{ $product->price }}</div>
                                <div class="card-actions">
                                    <a href="{{ route('basket.added', ['id' => $product->id]) }}"
                                       class="btn btn-add-to-cart">Добавить к корзину</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if($categories->count() > 0)
            <div class="categories-section">
                <h3>Дополнительные категории</h3>
                <div class="categories">
                    @foreach($categories as $category)
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/js/main.js"></script>
@endsection