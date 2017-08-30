@extends('manage.index')

@section('title')
    Список товаров
@endsection

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Post</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['title']}}</td>
                    <td>{{$product['description']}}</td>
                    <td>{{$product['price']}}</td>
                    <td><a href="{{ route('manage.getEdit', $product['id'])}}">Редактировать</a></td>
                    <td><a href="{{ route('manage.getDelete', $product['id'])}}">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection