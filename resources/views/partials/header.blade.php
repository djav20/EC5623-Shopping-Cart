<nav    class="navbar navbar-expand-lg navbar-light" 
        style="background-color: #e3f2fd;">

  <a    class="navbar-brand" 
        href="{{ route('product.index') }}"
        style="color: Red; font-size: 24px">

        <i class="fab fa-medrt fa-lg" style="color:Red;"></i>
        Med Online
  </a>

  <button   class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">

    <span   class="navbar-toggler-icon">
            </span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a  class="nav-link" 
            href="{{ route('product.shoppingCart') }}"
            style="font-size: 16px">
            
            <i class="fas fa-cart-plus fa-lg"></i>
            Shopping Cart

            <span class="badge">
              {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}
            </span>
        </a>

      </li>
      <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" 
            href="#" 
            id="navbarDropdown" 
            role="button" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false"
            style="font-size: 16px">

            @if(Auth::guest())
            <i class="far fa-user fa-lg"></i>
            @else
            <i class="fas fa-user fa-lg"></i>
            @endif
            
            User Management
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          @if(Auth::check())
          <a class="dropdown-item" href="{{ route('user.profile') }}">User profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          @else
          <a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>
          <a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a>
          @endif
          
        </div>
      </li>
    </ul>
  </div>
</nav>