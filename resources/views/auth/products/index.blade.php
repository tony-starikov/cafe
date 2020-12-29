@extends('auth.layouts.master')

@section('title', 'Товары')

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-center text-uppercase">Товары</h4>
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
                    КАТЕГОРИЯ
                </th>
                <th>
                    ЦЕНА
                </th>
                <th>
                    ДЕЙСТВИЯ
                </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="{{ route('products.show', $product) }}">ОТКРЫТЬ</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('products.edit', $product) }}">РЕДАКТИРОВАТЬ</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="УДАЛИТЬ"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a class="btn btn-success" type="button" href="{{ route('products.create') }}">ДОБАВИТЬ ТОВАР</a>
        <br>

        <div class="container">
            <div class="row">
                <nav class="d-flex justify-content-center mt-3">
                    {{ $products->links() }}
                </nav>
            </div>
        </div>
        <br>
    </div>
@endsection
