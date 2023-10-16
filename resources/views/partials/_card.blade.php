<div class="col">
    <div class="card flex-row">

        <div>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Partenza</strong>: {{ $train->from_city }}
                </li>
                <li class="list-group-item">
                    <strong>Destinazione</strong>: {{ $train->to_city }}
                </li>
                <li class="list-group-item">
                    <strong>Tipologia</strong>: {{ $train->type }}
                </li>
                <li class="list-group-item">
                    <strong>Costo</strong>: {{ $train->price }} €
                </li>
            </ul>
        </div>
        <div class="m-auto">
            <a href="{{ route('train_detail', $train->id) }}" class="btn btn-primary">DETAIL TRAIN</a>
        </div>
    </div>
</div>
