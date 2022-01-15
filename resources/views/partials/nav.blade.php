<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-black">
   <div class="container">
  <a class="navbar-brand mb-10" href="{{ route('index') }}">BLOG
    <img src="{{-- {{ asset('images/logo.png') }} --}}">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item nav-margin-down{{--  {{ Route::is('index') ? 'active' : ''}} --}}">
        <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
      </li>
      <li class="nav-item nav-margin-down{{--  {{ Route::is('products') ? 'active' : ''}} --}}">
        <a class="nav-link" href="{{ route('post') }}">All Blogs</a>
      </li>
      <li class="nav-item nav-margin-down{{--  {{ Route::is('contact') ? 'active' : ''}} --}}">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>
      
   {{--  <li class="nav-item nav-margin-down">
        <form class="d-flex" action="{{ route('search') }}" method="get">


          <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search Product" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary search-icon-button" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
          </div>

        </form>
      </li>  --}}


    </ul>
    {{-- <ul class="navbar-nav ml-auto mb-2 mb-lg-0"> --}}
    
<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
     

      @guest
      <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>

      @else

      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
          {{ Auth::user()->name }}  <span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>  
        

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
    @endguest

  </ul>

</div>
 </div>
</nav>