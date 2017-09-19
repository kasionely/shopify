@extends('manage.index')

@section('title')
    Список товаров
@endsection

@section('content')
    <div class="list-page">
        <a href="{{ route('manage.product.add') }}" class="btn btn-success">Добавить Товар</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Управление</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['title']}}</td>
                        <td>{{$product['price']}}</td>
                        <td><a href="{{ route('manage.product.edit', $product['id'])}}"
                               class="btn btn-primary">Редактировать</a></td>
                        <td>
                            <form action="{{ route('manage.product.delete', $product['id'])}}" method="post">
                                {{csrf_field()}}
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection