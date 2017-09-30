@extends('layouts.app')



@section('content')

<h4>Judul</h4>
		@foreach($posts as $post)
		
		<div class="form-group">
			<li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
		</div>

		@endforeach
		
		
<h4>Content</h4>
	@foreach($posts as $post)
	
		<div class="form-group">
			<li><a href="{{route('posts.show', $post->id)}}">{{$post->content}}</a></li>
		</div>	
		
	@endforeach
	
	
	
@endsection