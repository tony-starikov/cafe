<div class="col-lg-3 col-md-6 my-2">
    <div class="card h-100">
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    НОМЕР : {{ $order->id }}
                </li>
                <li class="list-group-item">
                    ИМЯ : {{ $order->name }}
                </li>
                <li class="list-group-item">
                    ТЕЛЕФОН : {{ $order->phone }}
                </li>
                <li class="list-group-item">
                    ВРЕМЯ : {{ $order->created_at->format('H:i d/m/Y') }}
                </li>
                <li class="list-group-item">
                    СУММА : {{ $order->getFullPrice() }} UAH
                </li>
                <li class="list-group-item">
                    <a class="btn btn-success" type="button" href="{{ route('userOrdersShow', $order) }}">ОТКРЫТЬ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
