@extends('master')

@section('title', 'Заказ')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form1Example1" class="form-control" />
                    <label class="form-label" for="form1Example1">Имя</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="tel" id="form1Example2" class="form-control" />
                    <label class="form-label" for="form1Example2">Телефон</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Заказать</button>
            </form>
        </div>
    </div>
@endsection
