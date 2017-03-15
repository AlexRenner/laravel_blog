<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

          @if (Route::has('login'))
              <div class="top-right links">
                  @if (Auth::check())
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ url('/login') }}">Login</a>
                      <a href="{{ url('/register') }}">Register</a>
                  @endif
              </div>
          @endif

          <div class="content">
              <div class="title m-b-md">
                  Laravel Blog
              </div>

              <div class="links">
                  <a href="https://laravel.com/docs">Documentation</a>
                  <a href="/">Home</a>
                  <a href="posts">Blogs</a>
                  <a href="posts/new">New Post</a>
              </div>

              @yield('content')

          </div>

        </div>
    </body>
</html>