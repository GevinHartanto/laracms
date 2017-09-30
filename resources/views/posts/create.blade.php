@extends('layouts.app')



@section('content')

	<!-- form action="/posts" method="post"> -->
	{!!Form::open()!!}
		<input type="text" name="title" />
		{{csrf_field()}}
		<input type="submit" name="submit" />
	</form>
	
@stop


@section('footer')



@stop