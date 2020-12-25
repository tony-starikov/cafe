@extends('layouts.master')

@section('title', 'Регистрация')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">

            <h3>Регистрация</h3>

            <form method="POST" action="{{ route('register') }}">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control" />
                    <label class="form-label" for="form1Example1">Имя</label>
                </div>

                <!-- Phone input -->
                <div class="form-outline mb-4">
                    <input type="text" name="phone" id="phone" class="form-control" />
                    <label class="form-label" for="phone">Телефон</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control" name="password" required />
                    <label class="form-label" for="password">Пароль</label>
                </div>

                <!-- Password confirm -->
                <div class="form-outline mb-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required />
                    <label class="form-label" for="password-confirm">Подтвердите пароль</label>
                </div>

            @csrf

            <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
            </form>
        </div>
    </div>
@endsection
