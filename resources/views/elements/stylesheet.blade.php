<!-- Bootstrap -->
<link href="{{ asset('cdn/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdn/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdn/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdn/css/animate.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdn/css/pgwslider.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="{{ asset('cdn/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdn/css/responsive.css') }}" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

<style>
    .top_nav {
        display: none;
    }

    body {
        background: #ddd;
    }#overlay {
    position: fixed; /* Sit on top of the page content */
    
    width: 100%; /* Full width (cover the whole page) */
    height: 100%; /* Full height (cover the whole page) */
    top: 0; 
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5); /* Black background with opacity */
    background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), rgba(0,0,0,0.55);
    z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
    cursor: pointer; /* Add a pointer on hover */
}
.preloader {
    margin-top: 20%;
}
.preloader img {
    margin: 0 auto;
}
</style>