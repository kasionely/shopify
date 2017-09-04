@extends('shop.layouts.main')

@section('title')
    Регистрация на сайте
@endsection

@section('content')
<div class="flex-container">
    <div class="manage-forms">
        <form method="post" action="{{ route('user.signup') }}">
            <div class="some-form-item">
                {{csrf_field()}}
                <label for="smFormGroupInput">Электронная почта:</label>
                <input type="text" placeholder="Пароль:" name="email">
            </div>
            <div class="some-form-item">
                <label for="smFormGroupInput">Пароль:</label>
                <input type="text" placeholder="Пароль:" name="password">
            </div>
            <div class="some-form-item">
                <label for="smFormGroupInput">Имя:</label>
                <input type="text" placeholder="Имя:" name="firstname">
            </div>
            <div class="some-form-item">
                <label for="smFormGroupInput">Фамилия:</label>
                <input type="text" placeholder="Фамилия:" name="lastname">
            </div>
            <div class="some-form-item">
                <label for="smFormGroupInput">Номер телефона:</label>
                <input type="text" placeholder="Фамилия:" name="phone">
            </div>
            <div class="some-form-item">
                <input type="submit" class="btn register-btn">
            </div>
        </form>
    </div>
</div>
@endsection