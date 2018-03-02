@extends('layout.master')

@section('content')

	<div class="col-md-8 blog-main">
		<h1> Create a post here. </h1>
		<hr>

		<form method="POST" action="/posts">
		<!-- use POST to save the post in to DB,
			DB will use GET to get this post -->

			{{ csrf_field() }}
		<!-- this will generate a unique token to verify that the request is safe -->

		  <div class="form-group">
		    <label for="title">Post title</label>
		    <input type="string" class="form-control" id="Title", name='title' >
		    <!--could add required for validation-->
		  </div>

		  <div class="form-group">
		    <label for="body">Body</label>
		    <textarea id='body' name='body' class="form-control" r></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Publish</button>
		  </div>

			@include('layout.error')

		</form>
	</div>

@endsection