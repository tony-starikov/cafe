@extends('auth.layouts.master')

@section('title', 'Заказы')

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-center text-uppercase">ЗАКАЗЫ</h4>
        </div>
    </div>

    <div class="col-md-12">
        <section class="text-center my-4">
            <div class="container">
                <div class="row">
                    @foreach($orders as $order)
                        @include('auth.layouts.user-order-card', compact('order'))
                    @endforeach
                </div>
            </div>
        </section>
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
