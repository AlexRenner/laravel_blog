@extends('layout')

@section('content')
	<!-- Displays all existing blog posts -->
  @foreach ($posts as $post)
    <div class="blog-post" style="text-align:left;width:600px">
      <h3> {{ $post->title }} </h3><span style="font-size:10px;color:gray;display:inline-block"> {{ $post->created_at }} </span>
      <p>{{ $post->body }}</p><br>
    </div>
  @endforeach
  
@endsection