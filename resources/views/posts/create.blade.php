@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">

  <h1>Create a post</h1>

  <hr>

  <form method="POST" action="/posts">
    @csrf

    <div class="form-group">
      <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $title }}">
    </div>

    <div class="form-group">
      <label for="title">Body:</label>
      <textarea class="form-control" id="body" name="body">{{ $body }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
  </form>

</div>

@endsection