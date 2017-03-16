@extends('layout')

@section('content')
	<!-- form for creating a new blog post -->
	<form method="POST" action="/laravel/public/posts" id="new-post-form">
		{{ csrf_field() }}

		<label for="title">Title:</label><br>
		<input type="text" id="title" name="title" style="width:400px" required><br>

		<label for="body">Post:</label><br>
		<textarea name="body" form="new-post-form" style="width:400px;height:200px" required></textarea><br>

		<input type="submit" value="Submit!">

	</form>
@endsection