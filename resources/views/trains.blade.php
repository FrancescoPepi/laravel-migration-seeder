@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>{{ $title }}</h1>
        <div class="row row-cols-2 g-3">
            @forelse($trains as $train)
                @include('partials._card')
            @empty
                <h2>Non ci sono risultati</h2>
            @endforelse
        </div>
    </section>
@endsection
