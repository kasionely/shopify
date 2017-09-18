@extends('manage.index')

@section('title')
    Добавить товар
@endsection

@section('content')
    <div class="flex-container">
        <div class="manage-forms">
            <form method="post" action="{{ route('manage.product.store') }}" enctype="multipart/form-data"
                  class="add-form">
                <div class="some-form-item">
                    {{csrf_field()}}
                    <label for="lgFormGroupInput">Название товара:</label>
                    <input type="text" placeholder="Название" name="title">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Краткое описание:</label>
                    <textarea id="little_description" name="little_description"
                              class="form-control my-editor"></textarea>
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Цена товара:</label>
                    <input type="text" placeholder="Описание" name="price">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Описание товара:</label>
                    <textarea id="description" name="description" class="form-control my-editor"></textarea>
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Добавить картинку:</label>
                    <div class="product-gallery-wrap">
                        <div class="upload-view-btn item-view"
                             data-action="{{ route('manage.product.image') }}"
                             data-name="image"
                             data-input="gallery[]">
                            <i class="fa fa-image"></i>
                        </div>
                    </div>
                </div>
                <div class="some-form-item">
                    <input type="submit" class="btn add-btn">
                </div>
            </form>
        </div>
    </div>
@endsection