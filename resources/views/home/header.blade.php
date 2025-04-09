<header class="header_section">
    
  <nav class="navbar navbar-expand-lg custom_nav-container ">
    <a href="index.html" style="
    text-decoration: none;
    display: inline-block;
    position: relative;
    padding: 5px 0;
">
  <span style="
    font-family: 'Poppins', sans-serif;
    font-size: 1.8rem;
    font-weight: 800;
    background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
    padding-right: 8px;
  ">On Market</span>
</a>
      
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('shop') }}">
              Shop
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('why') }}">
              Why Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('testimonial') }}">
              Testimonial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact_us') }}">Contact Us</a>
          </li>
        </ul>
        <div class="user_option">

          @if (Route::has('login'))
            @auth

            <a href="{{ url('my_orders') }}">My Orders</a>

            <a href="{{ url('mycart') }}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              [{{ $count }}]
            </a>  

            <form style="padding: 15px" method="POST" action="{{ route('logout') }}">
              @csrf
              <input class="btn btn-success" type="submit" value="Logout">
            </form>
            @else

          <a href="{{ url('/login') }}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>
          <a href="{{ url('/register') }}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
              Register
            </span>
          </a>
          @endauth
          @endif
          
          
        </div>
      </div>
    </nav>
    <br>
  </header>