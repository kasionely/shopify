@extends('shop.layouts.main')

@section('title')
    Корзина Endiegogo
@endsection

@section('content')
    <div class="checkout-page">
        <div class="flex-container">
            <div class="panel">
                <div class="panel-heading">
                    <h1>Оформление заказа</h1>
                </div>
                <div class="panel-body">
                    <h4>Общая сумма: {{ $total }}</h4>
                    <div class="manage-forms">
                        <form action="{{ route('basket.checkout') }}" method="post">
                            <div class="some-form-item">
                                {{ csrf_field() }}
                                <label for="smFormGroupInput">Имя:</label>
                                <input type="text" placeholder="Имя:" name="firstname" required>
                            </div>
                            <div class="some-form-item">
                                <label for="smFormGroupInput">Фамилия:</label>
                                <input type="text" placeholder="Фамилия:" name="lastname" required>
                            </div>
                            <div class="some-form-item">
                                <label for="smFormGroupInput">Электронная почта:</label>
                                <input type="text" placeholder="Электронная почта:" name="email" required>
                            </div>
                            <div class="some-form-item">
                                <label for="smFormGroupInput">Мобильный телефон:</label>
                                <input type="text" placeholder="Телефон:" name="phone" required>
                            </div>
                            <div class="some-form-item">
                                <label for="smFormGroupInput">Город:</label>
                                <input type="text" placeholder="Город:" name="city" required>
                            </div>
                            <div class="some-form-item">
                                <label for="smFormGroupInput">Адрес:</label>
                                <input type="text" placeholder="Город:" name="address" required>
                            </div>
                            <div class="some-form-item">
                                <label for="smFormGroupInput">Комментарий к заказу:</label>
                                <textarea name="comment" id="comment" cols="10" rows="5"
                                          placeholder="Комментарий к заказу"></textarea>
                            </div>
                            <div class="some-form-item" style="text-align: center">
                                <div class="cash-radio">
                                    <input type="radio" class="radio-input" name="payment" value="Наличными">
                                    <div class="radio">
                                        <div class="inline-wrapper">
                                            <i class="fa fa-money"></i>
                                            <span>Наличными</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-radio">
                                    <input type="radio" class="radio-input" name="payment" value="Карточкой">
                                    <div class="radio">
                                        <div class="inline-wrapper">
                                            <i class="fa fa-credit-card"></i>
                                            <span>Картой</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="some-form-item">
                                <button type="submit" class="btn register-btn">Оформить заказ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection