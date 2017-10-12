@extends('shop.layouts.main')

@section('title')
    Laravel Shopping Cart
@endsection


@section('content')
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
        </div>
    </div>
@endsection