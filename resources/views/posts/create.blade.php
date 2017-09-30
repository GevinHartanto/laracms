@extends('layouts.app')



@section('content')

	<!-- form action="/posts" method="post"> -->
	{!!Form::open(['method'=>'POST', 'action' =>'PostController@store'])!!}
	
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
		</div>
		
		{!! Form::close() !!}
	
@stop


@section('footer')



@stop