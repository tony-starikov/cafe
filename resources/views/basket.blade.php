@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ТОВАР</th>
                <th>КОЛ-ВО</th>
                <th>ЦЕНА</th>
                <th>ИТОГ</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="text-body">
                            <img alt="img" height="70px" src="/img/1.png">
                            <strong>{{ $product->name }}</strong>
                        </a>
                    </td>
                    <td>
                        <div class="d-inline-block">
                            <button class="btn btn-primary btn-sm">{{ $product->pivot->count }}</button>
                            <form action="{{ route('basketAdd', $product->id) }}" method="POST">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
                                @csrf
                            </form>
                            <form action="{{ route('basketRemove', $product->id) }}" method="POST">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-minus"></i></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td><strong>{{ $product->price }} UAH</strong></td>
                    <td><strong>{{ $product->getPriceForCount() }} UAH</strong></td>
                </tr>

            @endforeach

            <tr>
                <td colspan="3"><h5>Общая стоимость:</h5></td>
                <td><h5>{{ $order->getFullPrice() }} UAH</h5></td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('orderCheck') }}"><h5>ОФОРМИТЬ ЗАКАЗ</h5></a>
        </div>
        <br>
    </div>
@endsection
