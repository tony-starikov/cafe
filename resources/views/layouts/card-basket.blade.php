<div class="col-lg-3 col-md-6 my-2">
    <div class="card h-100">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
                alt="product_image"
                src="{{ Storage::url($product->image) }}"
                class="img"
                height="200px"
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
            <h6> цена {{ $product->price }} UAH / итог {{ $product->getPriceForCount() }} UAH</h6>
            <div class="btn-group" role="group">
                <form action="{{ route('basketAdd', $product->id) }}" method="POST">
                    <button type="submit" class="btn btn-link"><span><i class="fas fa-plus"></i></span></button>
                    @csrf
                </form>
                <button class="btn btn-link">{{ $product->pivot->count }}</button>
                <form action="{{ route('basketRemove', $product->id) }}" method="POST">
                    <button type="submit" class="btn btn-link"><i class="fas fa-minus"></i></button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
