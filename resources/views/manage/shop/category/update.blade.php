@extends('manage.index')

@section('title')
    Изменить категорию
@endsection

@section('content')
    <div class="flex-container">
        <div class="manage-forms">
            <form method="post" action="{{ route('manage.category.update', $category['id']) }}">
                <div class="some-form-item">
                    {{csrf_field()}}
                    <label for="lgFormGroupInput">Название товара:</label>
                    <input type="text" placeholder="{{ $category['name'] }}" name="title">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Описание товара:</label>
                    <input type="text" placeholder="{{ $category['description'] }}" name="description">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Изменить картинку:</label>
                    <div class="upload-view-btn item-view">
                        <i class="fa fa-image"></i>
                        <input type="hidden" name="image">
                    </div>
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Изменить Иконку:</label>
                    <div class="upload-view-btn item-view">
                        <i class="fa fa-image"></i>
                        <input type="hidden" name="icon">
                    </div>
                </div>
                <div class="some-form-item">
                    <input type="submit" class="btn add-btn">
                </div>
            </form>
        </div>
    </div>
@endsection