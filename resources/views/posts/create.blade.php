@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">

        <h1>Create a post</h1>

        <hr>

        <form method="POST" action="/posts">
            @csrf

            @include('partials.errors')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="My Post">
            </div>

            <div class="form-group">
                <label for="title">Body:</label>
                <textarea class="form-control" id="body" name="body">My amazing post body.</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

    </div>

@endsection
