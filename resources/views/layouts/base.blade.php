<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('favicon.ico') }}">

  <title>@yield('title','Matrimony') </title>

  @include('elements.stylesheet')

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="{{ asset('assets/js/ie-emulation-modes-warning.js') }}"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="blog-masthead">
    <div class="container">
      @include('elements.navbar-top')
    </div>
  </div>

  <div class="container">

    <div class="blog-header">
      <h1 class="blog-title"></h1>
      <p class="lead blog-description"></p>
    </div>
    
    <div class="row">
      <div class="blog-main">
        <div class="col-sm-12">
        @include('errors.flash')
        @if(request()->user() && !request()->user()->email_verified)
        @component('components.alert',['class' => 'danger'])
        Verify email address
        @slot('anchorLink','#')
        @slot('anchorText','Verify now')
        @endcomponent
        @endif
          @yield('content')
        </div>
      </div>
      <!-- /.blog-main -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  @include('elements.footer') @include('elements.javascript') @yield('javascript')
</body>

</html>