<!DOCTYPE html>
<html>
  <head>
    @yield('headcontent')
  </head>
  <body>
    @include('includes._header')
    @yield('bodycontent')
    @include('includes._footer')
  </body>
</html>
