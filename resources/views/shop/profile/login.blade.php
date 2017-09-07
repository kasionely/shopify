@extends('shop.layouts.main')

@section('title')
    Регистрация на сайте
@endsection

@section('content')
    <div class="login-page">
        <div class="flex-container">
            <div class="login">
                <h2>Авторизация на сайте</h2>
                <div class="manage-forms">
                    <form method="post" action="{{ route('user.login') }}">
                        <div class="some-form-item">
                            <label for="smFormGroupInput">Электронная почта:</label>
                            <input type="text" placeholder="Пароль:" name="email" required>
                        </div>
                        <div class="some-form-item">
                            <label for="smFormGroupInput">Пароль:</label>
                            <input type="password" placeholder="Пароль:" name="password" required>
                        </div>
                        <div class="some-form-item">
                            <button type="submit" class="btn register-btn">Войти</button>
                            {{csrf_field()}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="if-not-register">
                <h2>Еще не зарегестированы?</h2>
                <a href="{{ route('user.register') }}" class="btn register-btn">Зарегестрироваться</a>
            </div>
        </div>
    </div>
@endsection