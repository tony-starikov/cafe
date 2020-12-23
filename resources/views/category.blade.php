@extends('master')

@section('title', $category->name)

@section('content')
<!-- Background image -->
<div class="container mt-2">
    <div
        class="p-5 text-center bg-image"
        style="
          background-image: url('https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg?cs=srgb&dl=pexels-igor-haritanovich-1695052.jpg&fm=jpg');
          height: 300px;
        "
    >
        <div class="mask" style="background-color: rgba(0,0,0,0.31)">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3"><strong>{{ $category->name }}</strong></h1>
                    <h4 class="mb-3"><strong>{{ $category->description }}</strong></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->

<!-- Products -->
<section class="text-center mt-3">
    <div class="container">
        <div class="row">
            @include('card')
            @include('card')
            @include('card')
            @include('card')
            @include('card')
            @include('card')
        </div>
    </div>
</section>
<!-- Products -->

<!-- Pagination -->
<div class="container">
    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
        <ul class="pagination pagination-lg">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- Pagination -->
@endsection
