@extends('manage.index')

@section('title')
    Список товаров
@endsection

@section('content')
    <div class="list-page">
        <a href="{{ route('manage.category.add') }}" class="btn btn-success">Добавить Категорию</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Статус</th>
                    <th>Иконка</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category['id']}}</td>
                        <td>{{$category['name']}}</td>
                        <td>{{$category['status']}}</td>
                        <td>{{$category['icon']}}</td>
                        <td><a href="{{ route('manage.category.edit', $category['id'])}}"
                               class="btn btn-primary">Редактировать</a></td>
                        <td>
                            <form action="{{ route('manage.category.delete', $category['id'])}}" method="post">
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