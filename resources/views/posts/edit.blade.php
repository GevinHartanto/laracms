@extends('layouts.app')



@section('content')

	<h1>Edit Post</h1>
	
	<form action="/posts" method="post">
		<input type="text" name="title" />
		{{csrf_field()}}
		<input type="submit" name="submit" />
	
	
@stop


@section('footer')


	
@stop