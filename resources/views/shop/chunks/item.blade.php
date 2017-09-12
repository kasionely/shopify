@extends('shop.layouts.main')

@section('title')
    {{ $product->title }}
@endsection

@section('content')
    <div class="product-page">
        <div class="product-header">
            <h1>{{ $product->title }}</h1>
        </div>
        <div class="flex-container">
            <div class="product-view">
                <div class="product-image">
                    <img src="/{{ $product->imagePath }}" alt="{{ $product->title }}">
                </div>
            </div>
            <div class="product-content">
                <div class="product-description">
                    {{ $product->description  }}
                </div>
            </div>
            <div class="product-action">
                <div class="product-price">
                    {{ $product->price }} ₸
                </div>
                <a href="" class="btn buy-btn">Добавить в корзину</a>
                <a href="" class="btn buy-one-click">Купить в один клик</a>
                <div class="product-info-section">
                    <a href="" class="product-link">Доставка курьеров</a>
                    <p>Сегодня и позже</p>
                </div>
                <div class="product-info-section">
                    <a href="" class="product-link">Самовывоз с магазина</a>
                    <p class="status-1">В наличии</p>
                </div>
            </div>
        </div>
        <div class="flex-container">

        </div>
    </div>
@endsection