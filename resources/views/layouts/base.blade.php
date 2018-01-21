
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

   @include('elements.stylesheet')
   @yield('stylesheet')
  </head>

  <body>
	@include('elements.navbar-top')
    <!-- Page Content -->
    <div class="container">
    @include('errors.flash')
      <!-- Introduction Row -->
         <!-- Team Members Row -->
     @yield('content')

    </div>
    <!-- /.container -->

    <!-- Footer -->
   @include('elements.footer')

    @include('elements.javascript')
	@yield('javascript')
  </body>

</html>
