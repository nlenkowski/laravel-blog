@extends('layouts.master')
@section('content')
<div class="col-sm-8 blog-main">
  <h1>{{ $post->title}}</h1>
  <p>{{ $post->body }}</p>

  <hr>

  <div class="comments">
    <h3>Comments</h3>
    <ul class="list-group">
      @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong>{{ $comment->created_at->diffForHumans() }} </strong>
        <br> {{ $comment->body }}
      </li>
    </ul>
    @endforeach
  </div>

  <br>

  <h5>Add Comment</h5>
  <form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}
    <div class="form-group">
      <textarea name="body" class="form-control" placeholder>Your message</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
  </form>

</div>
@endsection