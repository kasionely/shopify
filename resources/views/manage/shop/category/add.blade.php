@extends('manage.index')

@section('title')
    Добавить товар
@endsection

@section('content')
    <div class="flex-container">
        <div class="manage-forms">
            <form method="post" action="{{ route('manage.category.store') }}" enctype="multipart/form-data">
                <div class="some-form-item">
                    {{csrf_field()}}
                    <label for="lgFormGroupInput">Название категорииe:</label>
                    <input type="text" placeholder="Название" name="name">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Описание категории:</label>
                    <input type="text" placeholder="Описание" name="description">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Добавить картинку:</label>
                    <div class="upload-view-btn item-view">
                        <i class="fa fa-image"></i>
                        <input type="file" name="image" class="imagePath">
                    </div>
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Добавить иконку:</label>
                    <div class="upload-view-btn item-view">
                        <i class="fa fa-image"></i>
                        <input type="file" name="icon" class="imagePath">
                    </div>
                </div>
                <div class="some-form-item">
                    <input type="submit" class="btn add-btn">
                </div>
            </form>
        </div>
    </div>
@endsection