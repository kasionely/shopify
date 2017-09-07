@extends('shop.layouts.main')

@section('title')
    Профиль Пользователя
@endsection

@section('content')
    <div class="profile-page">
        <div class="flex-container">
            <div class="panel">
                <div class="panel-heading">
                    <h2>Мои заказы</h2>
                </div>
                <div class="panel-body">
                    @foreach($orders as $order)
                        <div class="order-detail">
                            <div class="order-id">
                                <p>Номер заказа: #{{ $order['id'] }}</p>
                            </div>
                            @foreach($order->basket->items as $item)
                                <div class="item-name"> Название товара:
                                    @foreach($item as $property)
                                        <a href="#">
                                            <strong>{{ $property['title'] }}</strong>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="order-qty"><p>Количество:{{ $item['qty'] }}</p></div>
                                <div class="order-price"><p>Цена:{{ $item['price'] }}</p></div>
                            @endforeach
                        </div>
                        <div class="order-view">
                            @foreach($order->basket->items as $item)
                                @foreach($item as $property)
                                    <img src="{{ $property['imagePath'] }}" alt="" class="order-img">
                                @endforeach
                            @endforeach
                        </div>
                        <hr>
                        <strong>Общая сумма: {{ $order->basket->totalPrice }}</strong>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection