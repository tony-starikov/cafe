@extends('auth.layouts.master')

@section('title', 'Товары')

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-center text-uppercase">Товары</h4>
        </div>
    </div>

    <a class="btn btn-success" type="button" href="{{ route('products.create') }}">ДОБАВИТЬ ТОВАР</a>

    <div class="col-md-12">
        <section class="text-center my-4">
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        @include('auth.layouts.product-card', compact('product'))
                    @endforeach
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <nav class="d-flex justify-content-center mt-3">
                    {{ $products->links() }}
                </nav>
            </div>
        </div>
    </div>
@endsection
