@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-center text-uppercase">КАТЕГОРИИ</h4>
        </div>
    </div>

    <div class="col-md-12">
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    КОД
                </th>
                <th>
                    НАЗВАНИЕ
                </th>
                <th>
                    ДЕЙСТВИЯ
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('categories.show', $category) }}">ОТКРЫТЬ</a>
                                <a class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">РЕДАКТИРОВАТЬ</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="УДАЛИТЬ">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" type="button" href="{{ route('categories.create') }}">ДОБАВИТЬ КАТЕГОРИЮ</a>
        <br>

        <div class="container">
            <div class="row">
                <nav class="d-flex justify-content-center mt-3">
                    {{ $categories->links() }}
                </nav>
            </div>
        </div>
        <br>

    </div>
@endsection
