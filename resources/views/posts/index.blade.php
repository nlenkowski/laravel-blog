@extends('layouts.master')

@section('title', '– All Posts')

@section('content')

  <div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
      From the Firehose
    </h3>

    <p><a href="/posts/create" class="btn btn-primary btn-sm">New Post</a></p>

    @foreach($posts as $post)
      @include('posts.post')
    @endforeach

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

  </div><!-- /.blog-main -->

@endsection