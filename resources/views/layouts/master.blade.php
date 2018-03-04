
<!doctype html>
<html lang="en">
  <head>
    <title>Album example for Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

    @include('layouts.nav')

    <div class="container">
      @yield('content')
    </div>

    @include('layouts.footer')

  </body>
</html>
