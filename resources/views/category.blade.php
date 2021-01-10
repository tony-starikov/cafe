@extends('layouts.master')

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
                    <h1 class="mb-3 text-uppercase"><strong>{{ $category->name }}: {{ $category->products->count() }}</strong></h1>
                    <h4 class="mb-3"><strong>{{ $category->description }}</strong></h4>
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
