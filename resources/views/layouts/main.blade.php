<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>
    <div class="pageWrapper">
      @include('layouts.partials.navigation')
      @yield('content')
      <script type="text/javascript" src="/js/app.js"></script>
    </div>
  </body>
</html>