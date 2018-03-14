<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <a class="blog-header-logo text-dark" href="/">Blog</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      @if (Auth::check())
        Welcome <a href="/home" class="ml-1 text-capitalize">{{ Auth::user()->name }}</a>
        <a class="btn btn-sm btn-outline-secondary ml-1" href="/logout">Logout</a>
      @else
        <a class="btn btn-sm btn-outline-secondary ml-1" href="/register">Register</a>
        <a class="btn btn-sm btn-outline-secondary ml-1" href="/login">Login</a>
      @endif
    </div>
  </div>
</header>

<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-between">
</div>
