@extends('shop.layouts.main')

@section('title')
    Регистрация на сайте
@endsection

@section('content')
    <div class="flex-container">
        <div class="manage-forms">
            <form method="post" action="{{ route('user.signin') }}">
                <div class="some-form-item">
                    <label for="smFormGroupInput">Электронная почта:</label>
                    <input type="text" placeholder="Пароль:" name="email">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Пароль:</label>
                    <input type="text" placeholder="Пароль:" name="password">
                </div>
                <div class="some-form-item">
                    <input type="submit" class="btn register-btn">
                    {{csrf_field()}}
                </div>
            </form>
        </div>
    </div>
@endsection