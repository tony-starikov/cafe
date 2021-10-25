@extends('layouts.master')

@section('title', 'Главная')

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
                    <h2 class="mb-3">Теперь мы <strong>online!</strong></h2>
                    <h4 class="mb-3">Заказывай на сайте - забирай в кафе без <strong>очереди!</strong></h4>
                    <!-- <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                      >Call to action</a
                    > -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->

<!-- Navbar -->
@include('layouts.navbar')
<!-- Navbar -->

<!-- Products -->
<section class="text-center mt-3">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                @include('layouts.card', compact('product'))
            @endforeach
        </div>
    </div>
</section>
<!-- Products -->

<!-- Pagination -->
<div class="container">
    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
        {{ $products->links() }}
    </nav>
</div>
<!-- Pagination -->
@endsection
