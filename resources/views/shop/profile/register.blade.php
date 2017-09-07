@extends('shop.layouts.main')

@section('title')
    Регистрация на сайте
@endsection

@section('content')
    <div class="register-page">
        <div class="flex-container">
            <div class="register">
                <h2>Авторизация на сайте</h2>
                <div class="manage-forms">
                    <form method="post" action="{{ route('user.register') }}">
                        <div class="some-form-item">
                            {{csrf_field()}}
                            <label for="smFormGroupInput">Электронная почта:</label>
                            <input type="text" placeholder="Электронная почта:" name="email" required>
                        </div>
                        <div class="some-form-item">
                            <label for="smFormGroupInput">Пароль:</label>
                            <input type="password" placeholder="Пароль:" name="password" required>
                        </div>
                        <div class="some-form-item">
                            <label for="smFormGroupInput">Имя:</label>
                            <input type="text" placeholder="Имя:" name="firstname" required>
                        </div>
                        <div class="some-form-item">
                            <label for="smFormGroupInput">Фамилия:</label>
                            <input type="text" placeholder="Фамилия:" name="lastname" required>
                        </div>
                        <div class="some-form-item">
                            <label for="smFormGroupInput">Номер телефона:</label>
                            <input type="text" placeholder="Фамилия:" name="phone" required>
                        </div>
                        <div class="some-form-item">
                            <button type="submit" class="btn register-btn">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection