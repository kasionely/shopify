@extends('manage.index')

@section('title')
    Добавить товар
@endsection

@section('content')
    <div class="flex-container">
        <div class="manage-forms">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Post</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['title']}}</td>
                        <td>{{$product['post']}}</td>
                        <td><a href="{{ route('manage.getEdit', $product['id']) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="{{ route('manage.delete', $product['id']) }}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection