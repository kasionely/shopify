@extends('manage.index')

@section('title')
    Просмотр заказа {{ $order['id'] }}
@endsection

@section('content')
    <div class="flex-container">
        <div class="order-view">
            <div class="manage-forms">
                <div class="some-form-item">
                    <label>Номер заказа:</label>
                    <span>{{ $order['id'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Метод оплаты</label>
                    <span>{{ $order['payment'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Создан, от</label>
                    <span>{{ $order['created_at'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Имя:</label>
                    <span>{{ $order['firstname'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Фамилия:</label>
                    <span>{{ $order['lastname'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Email:</label>
                    <span>{{ $order['email'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Телефон:</label>
                    <span>{{ $order['phone'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Город:</label>
                    <span>{{ $order['city'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Адрес:</label>
                    <span>{{ $order['address'] }}</span>
                </div>
                <div class="some-form-item">
                    <label>Заказ:</label>
                    @foreach($baskets as $basket)
                        <ul class="basket-item">
                            <li>
                                <span>{{ $basket->quantity }}x
                                    <a href="/product/{{ $basket->product_id }}">{{ $basket->product_id }}</a>
                                </span>
                                <strong>{{ $basket->product_price }} тенге</strong>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection