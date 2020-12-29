@extends('auth.layouts.master')

@section('title', 'Заказы')

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-center text-uppercase">ЗАКАЗЫ</h4>
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
                    ИМЯ
                </th>
                <th>
                    ТЕЛЕФОН
                </th>
                <th>
                    КОГДА ЗАКАЗАН
                </th>
                <th>
                    СУММА
                </th>
                <th>
                    ДЕЙСТВИЯ
                </th>
            </tr>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->getFullPrice() }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button" href="{{ route('userOrdersShow', $order) }}">ОТКРЫТЬ</a>
                        </div>
                    </td>
                </tr>
                @endforeach
        </table>
        <br>

        <div class="container">
            <div class="row">
                <nav class="d-flex justify-content-center mt-3">
                    {{ $orders->links() }}
                </nav>
            </div>
        </div>
    </div>
@endsection
