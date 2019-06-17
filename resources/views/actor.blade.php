@extends('template')

@section('container')

<h1>Actors</h1>
<ul>
@foreach ($allActors as $actor)
<li>{{$actor->primeiro_nome}}</li>
@endforeach
</ul>
@endsection 