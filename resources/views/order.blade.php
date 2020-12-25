@extends('layouts.master')

@section('title', 'Подтверждение заказа')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">

            <h3>Подтвердите заказ.</h3>

            <p>
                Общая стоимость заказа: <b>{{ $order->getFullPrice() }}</b> UAH
            </p>

            <p>
                Укажите имя и номер телефона, чтоб мы могли с вами связаться.
            </p>

            <form method="POST" action="{{ route('orderConfirm') }}">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control" />
                    <label class="form-label" for="form1Example1">Имя</label>
                </div>

                <!-- Phone input -->
                <div class="form-outline mb-4">
                    <input type="text" name="phone" id="phone" class="form-control" />
                    <label class="form-label" for="form1Example2">Телефон</label>
                </div>

                @csrf

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Заказать</button>
            </form>
        </div>
    </div>
@endsection
