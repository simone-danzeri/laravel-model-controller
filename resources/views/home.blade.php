@extends('layouts.app')
@section('content')
    <h1 class="text-center my-5">Movies list</h1>
    <div class="container my-3">
        <div class="movies-list d-flex flex-wrap gap-4">
            {{-- Singoli movie --}}
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-header fw-bold">
                    {{ $movie->title }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Original title: {{ $movie->original_title }}</li>
                        <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Release date: {{ $movie->date }}</li>
                        <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
