@extends('template')

@section('container')

<h1>Actors</h1>
<ul>
@foreach ($allActors as $actor)
<li>{{$actor->primeiro_nome}} <a href="actor/edit/{{ $actor->ator_id }}">Edit</a> </li>
@endforeach
</ul>
@endsection 