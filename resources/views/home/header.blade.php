{{-- <style>
  .header_section {
    position: sticky;
    top: 0;
    z-index: 1000;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    background: rgba(255, 255, 255, 0.95);
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
  }

  .custom_nav-container {
    padding: 0.8rem 2rem;
    transition: all 0.3s ease;
  }

  .navbar-brand {
    text-decoration: none;
    display: inline-block;
    position: relative;
    padding: 8px 0;
    transition: transform 0.3s ease;
  }

  .navbar-brand:hover {
    transform: translateY(-2px);
  }

  .brand-text {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    font-size: 1.9rem;
    font-weight: 900;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #667eea 100%);
    background-size: 200% 200%;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    letter-spacing: -0.5px;
    transition: all 0.3s ease;
    animation: gradientShift 4s ease infinite;
    position: relative;
  }

  @keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
  }

  .brand-text::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    transition: width 0.3s ease;
  }

  .navbar-brand:hover .brand-text::after {
    width: 100%;
  }

  .navbar-toggler {
    border: none;
    padding: 0.5rem;
    border-radius: 8px;
    background: rgba(102, 126, 234, 0.1);
    transition: all 0.3s ease;
  }

  .navbar-toggler:hover {
    background: rgba(102, 126, 234, 0.2);
    transform: scale(1.05);
  }

  .navbar-toggler span {
    display: block;
    width: 25px;
    height: 3px;
    background: #667eea;
    margin: 5px 0;
    border-radius: 2px;
    transition: all 0.3s ease;
  }

  .navbar-nav {
    gap: 1rem;
    align-items: center;
  }

  .nav-item {
    position: relative;
  }

  .nav-link {
    color: #2d3748;
    font-weight: 500;
    font-size: 0.95rem;
    padding: 0.75rem 1.25rem !important;
    border-radius: 50px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    text-decoration: none;
  }

  .nav-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
    transition: left 0.3s ease;
    border-radius: 50px;
  }

  .nav-link:hover::before {
    left: 0;
  }

  .nav-link:hover {
    color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.2);
  }

  .user_option {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .user_option a {
    color: #2d3748;
    text-decoration: none;
    font-weight: 500;
    padding: 0.6rem 1.2rem;
    border-radius: 50px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .user_option a i {
    margin-right: 0.5rem;
    transition: transform 0.3s ease;
  }

  .user_option a:hover i {
    transform: scale(1.1);
  }

  .user_option a:hover {
    color: #667eea;
    background: rgba(102, 126, 234, 0.1);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.2);
  }

  .cart-link {
    position: relative;
    padding: 0.75rem 1rem !important;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white !important;
    border-radius: 50px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
  }

  .cart-link:hover {
    background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    color: white !important;
  }

  .cart-count {
    background: #ff6b6b;
    color: white;
    border-radius: 50%;
    padding: 0.2rem 0.5rem;
    font-size: 0.8rem;
    font-weight: bold;
    margin-left: 0.5rem;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
  }

  .btn {
    padding: 0.6rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    text-decoration: none;
    display: inline-block;
  }

  .btn-success {
    background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(72, 187, 120, 0.3);
  }

  .btn-success:hover {
    background: linear-gradient(135deg, #38a169 0%, #2f855a 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(72, 187, 120, 0.4);
    color: white;
  }

  .logout-form {
    padding: 0 !important;
    margin: 0;
    display: inline-block;
  }

  @media (max-width: 991px) {
    .navbar-collapse {
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(20px);
      margin-top: 1rem;
      border-radius: 15px;
      padding: 1.5rem;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .navbar-nav {
      flex-direction: column;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }

    .nav-link {
      width: 100%;
      text-align: center;
    }

    .user_option {
      flex-direction: column;
      gap: 0.5rem;
      width: 100%;
    }

    .user_option a, .btn {
      width: 100%;
      text-align: center;
    }

    .custom_nav-container {
      padding: 0.8rem 1rem;
    }

    .brand-text {
      font-size: 1.6rem;
    }
  }

  @media (max-width: 576px) {
    .brand-text {
      font-size: 1.4rem;
    }
    
    .custom_nav-container {
      padding: 0.6rem 0.8rem;
    }
  }

  /* Smooth scroll behavior */
  html {
    scroll-behavior: smooth;
  }

  /* Loading animation for better UX */
  .nav-link, .user_option a, .btn {
    position: relative;
  }

  .nav-link::after, .user_option a::after, .btn::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
  }

  .nav-link:active::after, .user_option a:active::after, .btn:active::after {
    width: 300px;
    height: 300px;
  }
</style> --}}

<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        {{-- <div class="flex shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" />
        </div> --}}
        <span class="text-white text-2xl font-bold">
          On Market
        </span>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            {{-- <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a> --}}
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
            <a href="{{ url('shop') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Shop</a>
            <a href="{{ url('why') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Why Us</a>
            <a href="{{ url('testimonial') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Testimonial</a>
            <a href="{{ url('contact_us') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact Us</a>
          </div>
          
      </div>
      <div class="w-full flex justify-center lg:flex-1 lg:justify-end space-x-4 mt-2 lg:mt-0">
        @if (Route::has('login'))
          @auth
            <a href="{{ url('my_orders') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              My Orders
            </a>
            <a href="{{ url('mycart') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium cart-link">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              My Cart
              {{-- Cart count --}}
              <span class="cart-count">{{ $count }}</span>
            </a>
            <form class="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
            <input class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" type="submit" value="Logout">
          </form>
        @else
          <a href="{{ url('/login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Login</span>
          </a>
          <a href="{{ url('/register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>Register</span>
          </a>
          @endauth
        @endif
      </div>
      
      
      {{-- <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button> --}}

        <!-- Profile dropdown -->
        {{-- <div class="relative ml-3"> --}}
          {{-- <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </button>
          </div> --}}

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          {{-- <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div> --}}
        {{-- </div> --}}
      {{-- </div> --}}
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  {{-- <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
    </div>
  </div> --}}
</nav>



{{-- <header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a href="index.html" class="navbar-brand">
      <span class="brand-text">On Market</span>
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fa fa-home"></i>
            Home <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('shop') }}">
            <i class="fa fa-store"></i>
            Shop
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('why') }}">
            <i class="fa fa-star"></i>
            Why Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('testimonial') }}">
            <i class="fa fa-comments"></i>
            Testimonial
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('contact_us') }}">
            <i class="fa fa-envelope"></i>
            Contact Us
          </a>
        </li>
      </ul>
      
      <div class="user_option">
        @if (Route::has('login'))
          @auth
            <a href="{{ url('my_orders') }}">
              <i class="fa fa-box"></i>
              My Orders
            </a>

            <a href="{{ url('mycart') }}" class="cart-link">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              <span class="cart-count">{{ $count }}</span>
            </a>  

            <form class="logout-form" method="POST" action="{{ route('logout') }}">
              @csrf
              <input class="btn btn-success" type="submit" value="Logout">
            </form>
          @else
            <a href="{{ url('/login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>
            <a href="{{ url('/register') }}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>Register</span>
            </a>
          @endauth
        @endif
      </div>
    </div>
  </nav>
</header> --}}