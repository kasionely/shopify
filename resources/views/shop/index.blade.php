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
                            <div class="card-image">
                                <img src="{{ $product->imagePath }}" alt="" class="img-responsive">
                            </div>
                            <div class="card-content">
                                <h3>{{ $product->title }}</h3>
                                <p class="description">{{ $product->description }}</p>
                                <div class="price">${{ $product->price }}</div>
                                <a href="{{ route('basket.added', ['id' => $product->id]) }}"
                                   class="btn btn-add-to-cart">Добавить к корзину</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="categories-section">
                <h3>Дополнительные категории</h3>
                <div class="categories">
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                    <a href="#" class="category">
                        <div class="category-content">
                            <div class="category-image"
                                 style="background-image: url('https://g1.iggcdn.com/assets/site/home_category_tiles/Desktop/home-ab761c0bd29f1c244c44073155e74b98691ebade0b08b5b44085c2a9d80e8134.jpg')"></div>
                            <div class="category-background"></div>
                            <i class="fa fa-home category-icon"></i>
                            <div class="category-title">Home</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection