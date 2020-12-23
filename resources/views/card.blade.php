<div class="col-lg-4 col-md-6 mt-2 mb-2">
    <div class="card h-100">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
                src="/img/1.png"
                class="img-fluid"
            />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="text-body">{{ $product->name }} <span class="badge bg-success">NEW</span></a>
            </h5>
            <h6>{{ $product->price }} UAH</h6>
            <h6>{{ $product->category->name }}</h6>
            <a href="{{ route('basket') }}" class="btn btn-primary">В корзину <span><i class="fas fa-shopping-cart"></i></span></a>
        </div>
    </div>
</div>
