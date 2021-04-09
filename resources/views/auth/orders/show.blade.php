@extends('auth.layouts.master')

@section('title', 'ЗАКАЗ ' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №{{ $order->id }}</h1>
                    <p>Заказчик: <b>{{ $order->name }}</b></p>
                    <p>Номер теелфона: <b>{{ $order->phone }}</b></p>

                    <section class="text-center my-4">
                        <div class="container">
                            <div class="row">
                                @foreach($order->products as $product)
                                    @include('auth.layouts.order-product-card', compact('product'))
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
