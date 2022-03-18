<!DOCTYPE html>
<html lang="en">
  <head>

    @include('backend.includes.header')
    @include('backend.includes.info')
    @include('backend.includes.css')
 
  </head>

  <body>

    @include('backend.includes.left-sidebar')
    @include('backend.includes.topbar')
    @include('backend.includes.right-sidebar')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('body')
      @include('backend.includes.footer')
    </div>
    <!-- ########## END: MAIN PANEL ########## -->

    @include('backend.includes.scripts')
    
  </body>
</html>
