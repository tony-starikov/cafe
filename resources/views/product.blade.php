@extends('master')

@section('title', 'Product')

@section('content')
<div class="row">
    <div class="col-md-6 mt-3">
        <img src="/img/1.png" alt="cake" class="img-fluid">
    </div>
    <div class="col-md-6 mt-3">
        <div class="p-4">
            <div class="mb-3">
                <a href="#">
                    <span class="badge bg-secondary mr-1">{{ $category }}</span>
                </a>
                <a href="#">
                    <span class="badge bg-success mr-1">NEW</span>
                </a>
                <a href="#">
                    <span class="badge bg-danger mr-1">SALE</span>
                </a>
            </div>
            <p class="lead">
                <span class="mr-1">
                    <del><strong>200 UAH</strong></del>
                </span>
                <span class="mr-1">
                    <strong>100 UAH</strong>
                </span>
            </p>
            <p class="lead font-weight-bold">{{ $product }}</p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente quisquam doloremque odio accusantium a laudantium veniam perferendis. Repudiandae debitis, iure doloremque cumque dolores nihil, expedita consequatur, natus rerum enim hic?
            </p>
            <p>
                <button type="submit" class="btn btn-primary btn-md">
                    В КОРЗИНУ <i class="fas fa-shopping-cart ml-1"></i>
                </button>
            </p>
        </div>
    </div>
</div>

<hr>

<div class="row d-flex justify-content-center">
    <div class="col-md-6 text-center">
        <h4 class="my-3 h4">
            ИФОРМАЦИЯ О КАТЕГОРИИ
        </h4>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore nisi debitis ea accusamus aliquid minima praesentium ex iure quasi sunt eum dolores cumque, distinctio magnam repudiandae deserunt veritatis eveniet nostrum!
        </p>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-12 mt-3">
        <img src="/img/2.png" alt="cat" class="img-fluid">
    </div>
    <div class="col-lg-4 col-md-12 mt-3">
        <img src="/img/3.png" alt="cat" class="img-fluid">
    </div>
    <div class="col-lg-4 col-md-12 mt-3">
        <img src="/img/4.png" alt="cat" class="img-fluid">
    </div>
</div>
@endsection
