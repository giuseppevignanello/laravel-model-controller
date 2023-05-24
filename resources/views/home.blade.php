@extends('layouts.app')

@section('content')
    @forelse ($movies as $movie)
        <h3>{{ $movie->title }}</h3>
        <h5>{{ $movie->original_title }}</h5>
        <h6>{{ $movie->nationality }}</h6>
    @empty
    @endforelse
@endsection
