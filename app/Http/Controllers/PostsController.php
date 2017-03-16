<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function index() {
  	$posts = Post::all();

  	return view('posts.index', compact('posts'));
  }

  public function new() {
  	return view('posts.new');
  }

  public function store() {
    // Good for testing response
  	// dd(request()->all());

    // Server side validation:
    $this->validate(request(), [
      'title' => 'required',
      'body' => 'required'
    ]);

    // Create new post object
    $post = new Post;
    // Assign its attributes
    $post->title = request('title');
    $post->body = request('body');
    // Save it to database
    $post->save();
    // The above information is the long hand of
    // Post::create(request(['title', 'body']));
    
    return redirect('posts');
  }
}
