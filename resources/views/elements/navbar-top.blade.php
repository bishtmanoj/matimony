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
        
        <ul class="nav navbar-nav navbar-right main_nav">

            <li class="">
                <a class="" href="#">Help</a>
            </li>
            @if(Auth::check())
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

                    <img class="" src="{{ asset('uploads/profiles/'.Auth::user()->profile_picture) }}"> {{ Auth::user()->firstname }}
                    <i class="ion-ios-arrow-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('profile') }}">
                            <i class="ion-person"></i> My Profile</a>
                    </li>
                    
                    <li>
                        <a href="">
                            <i class="ion-ios-locked"></i> Change Password</a>
                    </li>
                    <li class="logout">
                        <a href="{{ route('logout') }}">
                            <i class="ion-log-out"></i> Logout</a>
                    </li>
                </ul>
            </li>

            @else 
            <li class="">
                <a class="" href="{{ route('login') }}">Login</a>
            </li>
            <li class="">
                <a class="" href="{{ route('signup') }}">Signup</a>
            </li>
            @endif

        </ul>



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