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
            <h6>{{ $product->name }}</h6>
            <ul class="list-group">
                <li class="list-group-item">
                    КОЛ-ВО : <button class="btn btn-primary btn-sm">{{ $product->pivot->count }}</button>
                </li>
                <li class="list-group-item">
                    ЦЕНА : {{ $product->price }} UAH
                </li>
                <li class="list-group-item">
                    СТОИМОСТЬ : {{ $product->getPriceForCount()}} UAH
                </li>
            </ul>
        </div>
    </div>
</div>
