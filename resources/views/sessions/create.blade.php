@extends ('layouts.master')
@section ('content')

<div class="col-md-8 blog-main">
  <h1>Login</h1>

  @include ('partials.status')

  <form action="/login" method="POST">
      @csrf

      <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

@endsection