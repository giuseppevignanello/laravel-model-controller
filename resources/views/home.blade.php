@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center justify-content-md-between">
            @forelse ($movies as $movie)
                <div class="card  my-3" style="width:18rem;">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">{{ $movie->original_title }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted ">Nationality: {{ $movie->nationality }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted ">Release Date: {{ $movie->date }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted ">Average Vote: {{ $movie->vote }}</h6>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
