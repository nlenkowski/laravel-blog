@extends('layouts.master')
@section('content')
<div class="col-sm-8 blog-main">
  <h1>{{ $post->title}}</h1>
  <p>{{ $post->body }}</p>

  <hr>

  <div class="comments">
    <h3>Comments</h3>

    @include('partials.status')

    <ul class="list-group">
      @foreach ($post->comments as $comment)
      <li class="list-group-item">
        <strong>{{ $comment->created_at->diffForHumans() }} </strong> by {{ $comment->user->name }}
        <br>
        <p>{{ $comment->body }}</p>
        <form method="POST" action="/comments/{{ $comment->id }}">
          <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </div>
        </form>
      </li>
    </ul>
    @endforeach
  </div>

  <br>

  <h5>Add Comment</h5>

  @include('partials.errors')

  <form method="POST" action="/comments">
    {{ csrf_field() }}
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div class="form-group">
      <textarea name="body" class="form-control" placeholder="Your message"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
  </form>

</div>
@endsection