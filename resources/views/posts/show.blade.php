@extends('layout.master')

@section('content')

<div class="col-md-8 blog-main">

	<h1> {{ $post->title }} </h1>

	{{ $post->body }}

	<hr>

	<div class='comments'> 

		<ul class="list-group">

		@foreach ($post->comments as $comment)
		
			<li class="list-group-item">

			<strong> 
				{{ $comment->created_at->diffForHumans() }} : &nbsp;
			</strong>
			
				{{ $comment->body }}
			</li>	
			
		@endforeach

		</ul>

	</div>


	@if (Auth::check())
		<!--add a comment-->
		<hr>
		<div class="card">
			<div class="card-block">
				<form class="form-group" method="POST" action="/posts/{{ $post->id}}/comments">
					@csrf
					<textarea name="body", placeholder="your comment" class="form-control"></textarea>
					<br>
					<div class="form-group">
				  		<button type="submit" class="btn btn-primary">leave comment</button>
				  	</div>
			  	</form>
			</div>
			
		</div>
	@endif

</div>

@endsection