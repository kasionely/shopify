@extends('shop.layouts.main')

@section('title')
    Корзина Endiegogo
@endsection

@section('content')
    <div class="basket-page">
        <div class="flex-container">
            <div class="basket">
                <div class="basket-header">Корзина</div>
                @if($baskets->count() > 0)
                    <div class="basket-list">
                        @foreach($baskets as $basket)
                            <ul class="basket-item">
                                <li>
                                <span class=>{{ $basket->qty }}x
                                    <a href="#">{{ $basket->product->title }}</a>
                                </span>
                                    <a href="{{ route('basket.delete', ['id' => $basket->product->id]) }}"
                                       class="btn btn-delete"><i class="fa fa-times-circle"></i></a>
                                    <strong>{{ $basket->product->price }} тенге</strong>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="basket-price">
                        <strong>Общая сумма: {{ $totalPrice }}</strong>
                        <a href="{{ route('basket.checkout') }}" class="btn btn-checkout">Оформить заказ</a>
                    </div>
                @else
                    <div class="basket-empty">
                        <h2>Ваша корзина пуста</h2>
                        <a href="/" class="go-to-store-btn">Вернуться к покупкам</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection