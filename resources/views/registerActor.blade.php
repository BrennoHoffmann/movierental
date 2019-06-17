@extends('template')

@section ('container')
<h1>Actor Register</h1>
<form action="register" method="post">
@csrf
<input type="text" name="firstName" id="">
<input type="text" name="lastName" id="">
<button type="submit">Submit</button>

</form>

@if(isset($result))
@if($result)
<h1>Done !</h1>
@else
<h1>Wrong</h1>
@endif
@endif
@endsection