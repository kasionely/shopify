@extends('shop.layouts.main')

@section('title')
    Корзина Endiegogo
@endsection

@section('content')
    <div class="basket-page">
        <div class="flex-container">
            <div class="basket">
                <div class="basket-header">Корзина</div>
                @if(Session::has('basket'))
                    <div class="basket-list">
                        @foreach($products as $product)
                            <ul class="basket-item">
                                <li>
                                <span class=>{{ $product['qty'] }}x
                                    <a href="#">{{ $product['item']['title'] }}</a>
                                </span>
                                    <a href="#" class="btn btn-delete"><i class="fa fa-times-circle"></i></a>
                                    <strong>{{ $product['price'] }} тенге</strong>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="basket-price">
                        <strong>Общая сумма: {{ $totalPrice }}</strong>
                        <a href="{{ route('basket.checkout') }}" class="btn btn-checkout">Оформить заказ</a>
                    </div>
                @else
                    <h2>No Items</h2>
                @endif
            </div>
        </div>
    </div>
@endsection