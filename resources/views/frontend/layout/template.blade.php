<!doctype html>
<html lang="en">
  <head>
    @include('frontend.includes.header')
    @include('frontend.includes.css')
    @yield('style')
  </head>
  <body>
    @include('frontend.includes.nav')
    
    @yield('body')

    @include('frontend.includes.footer')
    @include('frontend.includes.script')
  </body>
</html>