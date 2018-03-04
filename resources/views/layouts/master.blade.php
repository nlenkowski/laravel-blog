<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>
    <link rel="icon" href="favicon.ico">
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      @include('layouts.header')
      @include('partials.jumbotron')
    </div>

    <main role="main" class="container">
      <div class="row">
        @yield('content')
        @include('layouts.sidebar')
      </div>
    </main>

    @include('layouts.footer')

  </body>
</html>