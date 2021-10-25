<div class="col-lg-4 col-md-6 mt-2 mb-2">
    <div class="card h-100">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
                alt="product_image"
                src="{{ Storage::url($product->image) }}"
                class="img"
                height="240px"
            />
            <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="text-body">{{ $product->name }}
                    @if($product->isNew())<span class="badge bg-success">NEW</span>@endif
                    @if($product->isSale())<span class="badge bg-danger">SALE</span>@endif
                </a>
            </h5>
            <h6>{{ $product->price }} UAH</h6>
            <form action="{{ route('basketAdd', $product->id) }}" method="POST">
                <button type="submit" class="btn btn-primary">
                    В КОРЗИНУ <span><i class="fas fa-shopping-cart"></i></span>
                </button>
                @csrf
            </form>
        </div>
    </div>
</div>
