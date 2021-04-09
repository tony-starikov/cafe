<div class="col-lg-3 col-md-6 my-2">
    <div class="card h-100">
        <div class="card-body">
            <h5>{{ $category->name }}</h5>
            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                <ul class="list-group">
                    <li class="list-group-item">
                        НОМЕР : {{ $category->id }}
                    </li>
                    <li class="list-group-item">
                        КОД : {{ $category->code }}
                    </li>
                    <li class="list-group-item">
                        <a class="btn btn-success" type="button" href="{{ route('categories.show', $category) }}">ОТКРЫТЬ</a>
                    </li>
                    <li class="list-group-item">
                        <a class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">РЕДАКТИРОВАТЬ</a>
                    </li>
                    <li class="list-group-item">
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="УДАЛИТЬ">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
