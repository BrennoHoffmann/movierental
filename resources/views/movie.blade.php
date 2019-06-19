@extends('template')

@section('container')

<h1>Movies</h1>
<ul>
    
@foreach ($allMovies as $movie)
<li>{{$movie->titulo}}</li>
@endforeach
</ul>
@endsection 