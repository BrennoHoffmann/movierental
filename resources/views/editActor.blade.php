@extends('template')

@section ('container')
<h1>Actor Register</h1>
<form action="/actor/edit/{{$actor->ator_id}}" method="post">
@csrf
<input type="text" name="ator_id" value=" {{$actor->ator_id}}" id="">
<input type="text" name="firstName" value=" {{ $actor->primeiro_nome }}" id="">
<input type="text" name="lastName" value=" {{ $actor->ultimo_nome }}" id="">
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