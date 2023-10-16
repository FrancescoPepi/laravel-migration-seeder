@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>{{ $title }}</h1>
        <div class="row">
            @include('partials._card_detail')
        </div>
    </section>
@endsection
