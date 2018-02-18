<nav class="blog-nav navbar-collapse collapse">
  <ul class="nav navbar-nav">
    <li>
      <a class="blog-nav-item active" href="{{ url('/') }}">Home</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    @if(!Auth::check())
    <li>
      <a class="blog-nav-item" href="{{ route('login') }}">Sign In</a>
    </li>
    <li>
      <a class="blog-nav-item" href="{{ route('signup') }}">Sign Up</a>
    </li>
    @else
    <li>
      <a class="blog-nav-item" href="{{ route('profile') }}">Profile</a>
    </li>
    <li>
      <a class="blog-nav-item" href="{{ route('logout') }}">Logout</a>
    </li>
    @endif
  </ul>
</nav>