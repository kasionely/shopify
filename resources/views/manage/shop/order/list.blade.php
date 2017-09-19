@extends('manage.index')

@section('title')
    Заказы
@endsection

@section('content')
    <div class="list-page">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя и Фамилия</th>
                    <th>Телефон</th>
                    <th>Комментарий</th>
                    <th>Управление</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order['id']}}</td>
                        <td>{{$order['firstname']}} {{ $order['lastname'] }}</td>
                        <td>{{$order['phone']}}</td>
                        <td>{{$order['comment']}}</td>
                        <td>
                            <a href="{{ route('manage.order.view', $order['id'])}}"
                               class="btn btn-primary">Просмотреть заказ</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection