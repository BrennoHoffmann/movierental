@extends('template')

@section ('container')
<h1>Movie Edit</h1>
<form action="/movie/edit/{{$movie->filme_id}}" method="post">
@csrf
<input type="text" name="filme_id" value=" {{$movie->filme_id}}" id="" hidden>
<input type="text" name="firstName" value=" {{ $movie->titulo }}" id="">

<button type="submit">Submit</button>

</form>

@if(isset($result))
@if($result)
<h1>Done editing !</h1>
@else
<h1>Wrong editing !</h1>
@endif
@endif
@endsection

