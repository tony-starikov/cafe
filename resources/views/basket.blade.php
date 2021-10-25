@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <section class="text-center my-4">
        <div class="container">
            <div class="row">
                @foreach($order->products as $product)
                    @include('layouts.card-basket', compact('product'))
                @endforeach
            </div>
        </div>
    </section>
    <section class="text-center my-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h6>Общая стоимость: {{ $order->getFullPrice() }} UAH</h6>
                    <div class="btn-group pull-right" role="group">
                        <a type="button" class="btn btn-success" href="{{ route('orderCheck') }}"><h6>ОФОРМИТЬ ЗАКАЗ</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
