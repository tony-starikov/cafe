@extends('layouts.master')

@section('title', $product->name)

@section('content')
<div class="row">
    <div class="col-md-6 mt-3">
        <img src="{{ Storage::url($product->image) }}" alt="product_image" class="img-fluid">
    </div>
    <div class="col-md-6 mt-3">
        <div class="p-4">
            <div class="mb-3">
                <a href="#">
                    <span class="badge bg-secondary mr-1 text-uppercase">{{ $category->name }}</span>
                </a>
                @if($product->new)
                    <a href="#">
                        <span class="badge bg-success mr-1">NEW</span>
                    </a>
                @endif

                @if($product->sale)
                    <a href="#">
                        <span class="badge bg-danger mr-1">SALE</span>
                    </a>
                @endif
            </div>
            <p class="lead">
                <span class="mr-1">
                    <strong>{{ $product->price }} UAH</strong>
                </span>
            </p>
            <p class="lead font-weight-bold text-uppercase">{{ $product->name }}</p>
            <p>
                {{ $product->description }}
            </p>
            <form action="{{ route('basketAdd', $product->id) }}" method="POST">
                <button type="submit" class="btn btn-primary btn-md">
                    В КОРЗИНУ <i class="fas fa-shopping-cart ml-1"></i>
                </button>
                @csrf
            </form>
        </div>
    </div>
</div>

<hr>
@endsection
