@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->body }}</p>
    <hr>
    <h4>Comments</h4>
    <div class="comments">
      @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong>{{ $comment->created_at->diffForHumans() }} </strong>
        <br>
        {{ $comment->body }}
      </li>
      @endforeach
    </div>
  </div>

@endsection