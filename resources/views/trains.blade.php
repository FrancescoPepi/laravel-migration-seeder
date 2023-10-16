@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>{{ $title }}</h1>
        @forelse($trains as $train)
            <p>
                <strong>Partenza</strong>: {{ $train->from_city }} <br>
                <strong>Destinazione</strong>: {{ $train->to_city }} <br>
                <strong>Tipologia</strong>: {{ $train->type }} <br>
                <strong>Costo</strong>: {{ $train->price }} € <br>
                <strong>Numero Vagoni</strong>: {{ $train->number_wagons_all_out }} <br>
                <strong>Numero Vagoni</strong>: {{ $train->number_wagon }} <br>
                <strong>Vagone Ristorante</strong>:
                @if ($train->restaurant)
                    Si
                @else
                    No
                @endif
            </p>
            <hr>
        @empty
            <h2>Non ci sono risultati</h2>
        @endforelse
    </section>
@endsection
