<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="">
    <meta name="title" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="icon" type="{{ asset('cdn/image/png') }}" href="images/icons/favicon.png">
    <meta name="keywords" content="free bootstrap templates, download free bootstrap themes, html templates, bootstrap themes, fonts, photos,responsive html themes">
    <meta name="author" content="Chetantech.com"> 
    
    @include('elements.stylesheet') @yield('stylesheet')
    <style type="text/css">
    .container {
    margin-bottom: 25px;
}
    </style>
</head>

<body ng-app="MainApp" ng-controller="MainController">
<div id="overlay" ng-if="overlay">
<div class="preloader">
<img class="img img-responsive" src="https://mybusinessfilings.com/themes/custom/agenchy/images/default/preloader.gif" />
</div>
</div>

    <div class="main_wrapper">

      @include('elements.navbar-top')


        <div class="clearfix"></div>
   
        <div class="container has-parent-container">
        @include('errors.flash')
        @yield('content')
            <!-- -----  ROW END   ---- -->

        </div>
        <!-- -----  container  ---- -->

    </div>
    <!-- -----  main_wrapper  ---- -->




    <footer class="footer">
        <div class="container">

            <div class="row">
                <section class="col-md-4 col-sm-6">
                    <h3>About Bootstro</h3>
                    <p>Bootstro offers an wide array of category-oriented Free and Premium Responsive Bootstrap HTML Templates
                        and WordPress Themes that covers all kinds of templates or themes a developer may need!</p>
                </section>
                <section class="col-md-3 col-sm-6">
                    <h3>Useful Links</h3>
                    <ul class="list">
                        <li>
                            <a href="/about">About us</a>
                        </li>
                        <li>
                            <a href="">Free Images</a>
                        </li>
                        <li>
                            <a href="/become-an-author">Become an Author</a>
                        </li>
                        <li>
                            <a href="/publish-your-item">Advertise with us
                                <span class="label label-success">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="/privacy">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="/terms">Terms &amp; Conditions</a>
                        </li>

                    </ul>
                </section>
                <section class="col-md-3 col-sm-6">
                    <h3>Popular Categories</h3>
                    <ul class="list">

                        <li>
                            <a href="/category?c=Photos">Photos</a>
                        </li>

                        <li>
                            <a href="/category?c=Graphics">Graphics</a>
                        </li>

                        <li>
                            <a href="/category?c=Templates">Templates</a>
                        </li>

                        <li>
                            <a href="/category?c=CMS">CMS</a>
                        </li>

                        <li>
                            <a href="/category?c=HTML+Themes">HTML Themes</a>
                        </li>

                        <li>
                            <a href="/category?c=Fonts">Fonts</a>
                        </li>

                    </ul>
                </section>
                <section class="col-md-2 col-sm-6">
                    <h3>Help &amp; Support</h3>
                    <ul class="">
                        <li>
                            <a href="/faq">FAQ</a>
                        </li>
                        <li>
                            <a href="http://bootstro.com/blog">Blog</a>
                        </li>
                        <li>
                            <a href="/guidelines">Submission Guidelines</a>
                        </li>
                        <li>
                            <a href="/contact">Contact &amp; Support</a>
                        </li>
                    </ul>
                </section>


            </div>
            <div class="footer-bottom">
                <div class="text-left copy pull-left col-md-4">© 2018 Bootstro. All Rights Reserved</div>

                <div class="pay_with col-md-4">Secure Payments with
                    <img src="/themes/bootstro/images/icons/PayPal.png" alt="paypal">
                </div>
                <div class="col-md-4 social">
                    <ul class="nav navbar-nav navbar-right ">
                        <li>
                            <a href="https://www.facebook.com/bootstro" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <!---li><a href="#" target="_blank"><i class="fa fa-rss"></i> </a></li-->
                        <li>
                            <a href="https://plus.google.com/u/0/101933326680996347091" target="_blank">
                                <i class="fa fa-google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://in.pinterest.com/chetanchandel/bootstro/" target="_blank">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="uparrow" id="uparrow">
                    <i class="ion-ios-arrow-up"></i>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
  baseUrl = '{{ url('/') }}';
  </script>
    @include('elements.javascript') 
    
    @yield('javascript')
</body>

</html>