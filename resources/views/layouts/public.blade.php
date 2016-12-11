<!DOCTYPE html>
<html>
  <head>
    @include('includes._headcontentstandard')
  </head>
  <body>
    @include('includes._header')
    @yield('content')
    @include('includes._footer')
    <!-- This will let us create a background independent of other elements. -->
    @yield('background')
  </body>
</html>
