@extends('layouts.app')



@section('content')

	<h3>Title</h3>
	<ul>
		<li><h5>{{$post->title}}</h5></li>
	</ul>
	
	<h3>Content</h3>
	<ul>
		<li><h5>{{$post->content}}</h5></li>
	</ul>
	<a href="{{route('posts.edit', $post->id)}}">Edit</a>
	
@endsection