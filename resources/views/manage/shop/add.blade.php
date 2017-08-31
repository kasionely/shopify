@extends('manage.index')

@section('title')
    Добавить товар
@endsection

@section('content')
    <div class="flex-container">
        <div class="manage-forms">
            <form method="post" action="{{ route('manage.store') }}">
                <div class="some-form-item">
                    {{csrf_field()}}
                    <label for="lgFormGroupInput">Название товара:</label>
                    <input type="text" placeholder="Название" name="title">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Описание товара:</label>
                    <input type="text" placeholder="Описание" name="description">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Цена товара:</label>
                    <input type="text" placeholder="Описание" name="price">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Добавить картинку:</label>
                    <div class="upload-view-btn item-view">
                        <i class="fa fa-image"></i>
                        <input type="hidden" name="imagePath">
                    </div>
                </div>
                <div class="some-form-item">
                    <input type="submit" class="btn add-btn">
                </div>
            </form>
        </div>
    </div>
@endsection