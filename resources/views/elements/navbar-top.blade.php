<header class="navbar navbar-static-top bs-docs-nav main_header">

<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-target=".bs-bottom-navbar-collapse">
            <i class="ion-drag"></i>
        </button>
        <a class="navbar-brand" href="">
            <img src="{{ asset('cdn/images/logo.png') }}" alt="Shaadi">
        </a>
    </div>


    <nav class="bs-bottom-navbar-collapse">
        <div class="mobile-nav-ele">
            <button type="button" class="toggle-close">
                <i class="ion-ios-close-empty"></i>
            </button>
            <div class="clearfix"></div>
        </div>
        @if(!Auth::check())
        <ul class="nav navbar-nav navbar-right main_nav">

            <li class="">
                <a class="" href="login.php">Help</a>
            </li>

            <li class="dropdown">
                <a href="#" id="noti-icon" data-toggle="dropdown" class="dropdown-toggle top-bar-io">
                    <i class="fa fa-bell-o"></i>
                    <span class="label">Notifications</span>
                    <span id="notify-count" class="badge noti-counts">5</span>
                </a>


            </li>


            <li class="dropdown">
                <a href="#" class="top-bar-io dropdown-toggle" title="Messages" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label">Messages</span>
                    <span id="message_count" class="badge noti-counts">1</span>
                </a>

            </li>

            <li class="dropdown loggedin_user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                    <img class="" src="{{ asset('cdn/images/user.png') }}"> John Smith
                    <i class="ion-ios-arrow-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="">
                            <i class="ion-person"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="">
                            <i class="ion-bag"></i> My Shop</a>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa fa-plus-circle"></i> Add Credits</a>
                    </li>

                    <li>
                        <a href="">
                            <i class="ion-cash"></i> Transaction History</a>
                    </li>

                    <li>
                        <a href="">
                            <i class="ion-cash"></i> Payouts</a>
                    </li>
                    <li>
                        <a href="">
                            <i class="ion-information-circled"></i> Payout Information</a>
                    </li>

                    <li>
                        <a href="">
                            <i class="ion-ios-locked"></i> Change Password</a>
                    </li>
                    <li class="logout">
                        <a href="">
                            <i class="ion-log-out"></i> Logout</a>
                    </li>
                </ul>
            </li>

        </ul>


@endif
    </nav>
</div>
<!-- Container -->

<div class="user_nav">
    <div class="container">

        <nav class="bs-bottom-navbar-collapse">

            <ul class="user_nav_ul navbar-nav">
                <li class="active">
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>

            </ul>
        </nav>
    </div>
    <!-- Container -->
</div>


</header>