<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
        @yield('header')
  <body>
          @yield('navigation')
          @yield('content')
  @yield('footer')
  <script type="text/javascript" src="/js/app.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
<script>
$(document).foundation();
</script>
</html>
