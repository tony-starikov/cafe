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

            <form action="{{ route('products.destroy', $product) }}" method="POST">
                <ul class="list-group">
                    <li class="list-group-item">
                        НОМЕР : {{ $product->id }}
                    </li>
                    <li class="list-group-item">
                        КАТЕГОРИЯ : {{ $product->category->name }}
                    </li>
                    <li class="list-group-item">
                        КОД : {{ $product->code }}
                    </li>
                    <li class="list-group-item">
                        ЦЕНА : {{ $product->price }} UAH
                    </li>
                    <li class="list-group-item">
                        <a class="btn btn-success" type="button"
                           href="{{ route('products.show', $product) }}">ОТКРЫТЬ
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="btn btn-warning" type="button"
                           href="{{ route('products.edit', $product) }}">РЕДАКТИРОВАТЬ
                        </a>
                    </li>
                    <li class="list-group-item">
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="УДАЛИТЬ">
                    </li>
                </ul>
                @csrf
            </form>
        </div>
    </div>
</div>
