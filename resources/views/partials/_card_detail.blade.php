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
                <li class="list-group-item">
                    <strong>Numero Vagoni</strong>: {{ $train->number_wagons_all_out }}
                </li>
                <li class="list-group-item">
                    <strong>Numero Vagoni</strong>: {{ $train->number_wagon }}
                </li>
                <li class="list-group-item">
                    <strong>Vagone Ristorante</strong>:
                    @if ($train->restaurant)
                        Si
                    @else
                        No
                    @endif
                </li>
            </ul>
        </div>
        <div class="m-auto">
            <a href="{{ route('train') }}" class="btn btn-primary">BACK TO TICKETS</a>
        </div>
    </div>
</div>
