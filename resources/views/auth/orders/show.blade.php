@extends('auth.layouts.master')

@section('title', 'Order ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №{{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->name }}</b></p>
                    <p>Номер теелфона: <b>{{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>НАЗВАНИЕ</th>
                            <th>КОЛ-ВО</th>
                            <th>ЦЕНА</th>
                            <th>СТОИМОСТЬ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($order->products as $product)
                            <tr>
                                <td>
                                    <a class="text-uppercase" href="{{ route('product', [$product->category->code, $product->code]) }}">
                                        <img height="56px"
                                             src="{{ Storage::url($product->image) }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td><button class="btn btn-primary btn-sm">{{ $product->pivot->count }}</button></td>
                                <td>{{ $product->price }} UAH</td>
                                <td>{{ $product->getPriceForCount()}} UAH</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">ОБЩАЯ СТОИМОСТЬ:</td>
                            <td>{{ $order->getFullPrice() }} UAH</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
