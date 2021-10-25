@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
    <div class="container">
        <div class="row">
            <h4 class="text-center text-uppercase">КАТЕГОРИИ</h4>
        </div>
    </div>

    <a class="btn btn-success" type="button" href="{{ route('categories.create') }}">ДОБАВИТЬ КАТЕГОРИЮ</a>

    <div class="col-md-12">

        <section class="text-center my-4">
            <div class="container">
                <div class="row">
                    @foreach($categories as $category)
                        @include('auth.layouts.category-card', compact('category'))
                    @endforeach
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <nav class="d-flex justify-content-center mt-3">
                    {{ $categories->links() }}
                </nav>
            </div>
        </div>
        <br>

    </div>
@endsection
