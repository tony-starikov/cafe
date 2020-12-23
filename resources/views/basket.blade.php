@extends('master')

@section('title', 'Корзина')

@section('content')
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                            <img alt="img" height="50px" src="/img/1.png">
                            <i>{{ $product->name }}</i>
                        </a>
                    </td>
                    <td>
                        <h6><span class="badge bg-primary">100</span></h6>
                        <div class="btn-group form-inline">
                            <form action="{{ route('basketAdd', $product->id) }}" method="POST">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
                                @csrf
                            </form>
                            <form action="" method="POST">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-minus"></i></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{ $product->price }} UAH</td>
                    <td>$ 100</td>
                </tr>


            @endforeach

            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>$ 100</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('order') }}">Оформить заказ</a>
        </div>
        <br>
    </div>
@endsection
