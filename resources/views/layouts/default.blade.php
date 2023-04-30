<!doctype html>
<html class="no-js" lang="">
  <head>
     @include('includes.head')
  </head>

  <body>
     @include('includes.header')

     @yield('content')

     @include('includes.footer')
  </body>
</html>
