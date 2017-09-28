@extends('layouts.app')



@section('content')

	<form action="/posts" method="post">
		<input type="text" name="title" />
		{{csrf_field()}}
		<input type="submit" name="submit" />
	</form>
	
@stop


@section('footer')



@stop