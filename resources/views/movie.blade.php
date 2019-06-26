@extends('template')

@section('container')

<h1>Movies</h1>
<ul>
    
@foreach ($allMovies as $movie)
<li>{{$movie->titulo}} <a href="movie/edit/{{ $movie->filme_id }}">Edit</a> 
<a href="movie/delete/{{ $movie->filme_id }}">Delete</a></li></li>
@endforeach
</ul>
@endsection 