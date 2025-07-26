<script src="https://cdn.tailwindcss.com"></script>
<script>
  function toggleMenu() {
    document.getElementById("mobile-menu").classList.toggle("translate-x-full");
  }
</script>

<nav class="bg-gray-800 text-white">
  <div class="flex justify-between items-center px-6 py-6 md:py-8 relative">

    <div class="text-3xl font-bold">
      On Market
    </div>

    <div class="hidden lg:flex space-x-6 items-center">
      <a href="{{ url('/dashboard') }}" class="hover:text-blue-300 transition">Home</a>
      <a href="{{ url('shop') }}" class="hover:text-blue-300 transition">Shop</a>
      <a href="{{ url('why') }}" class="hover:text-blue-300 transition">Why Us</a>
      <a href="{{ url('testimonial') }}" class="hover:text-blue-300 transition">Testimonial</a>
      <a href="{{ url('contact_us') }}" class="hover:text-blue-300 transition">Contact Us</a>

      @auth
        <a href="{{ url('my_orders') }}" class="hover:text-blue-300 transition">My Orders</a>
        <a href="{{ url('mycart') }}" class="relative hover:text-blue-300 transition">
          My Cart
          <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-2">{{ $count }}</span>
        </a>
        <form method="POST" action="{{ route('logout') }}" class="inline">
          @csrf
          <button type="submit" class="ml-2 bg-green-600 hover:bg-green-700 px-3 py-1 rounded text-sm">Logout</button>
        </form>
      @else
        <a href="{{ url('/login') }}" class="hover:text-blue-300 transition">Login</a>
        <a href="{{ url('/register') }}" class="hover:text-blue-300 transition">Register</a>
      @endauth
    </div>


    <div class="lg:hidden">
      <button onclick="toggleMenu()" class="focus:outline-none">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </div>


  <div id="mobile-menu"
    class="fixed top-0 right-0 h-full w-64 bg-gray-900 transform translate-x-full transition-transform duration-300 z-50">
    <div class="p-6 space-y-6">
      <button onclick="toggleMenu()" class="text-right w-full text-white text-2xl font-bold">&times;</button>
      <a href="{{ url('/dashboard') }}" class="block text-white hover:text-blue-400">Home</a>
      <a href="{{ url('shop') }}" class="block text-white hover:text-blue-400">Shop</a>
      <a href="{{ url('why') }}" class="block text-white hover:text-blue-400">Why Us</a>
      <a href="{{ url('testimonial') }}" class="block text-white hover:text-blue-400">Testimonial</a>
      <a href="{{ url('contact_us') }}" class="block text-white hover:text-blue-400">Contact Us</a>

      @auth
        <a href="{{ url('my_orders') }}" class="block text-white hover:text-blue-400">My Orders</a>
        <a href="{{ url('mycart') }}" class="block text-white hover:text-blue-400">My Cart ({{ $count }})</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
            class="w-full mt-2 bg-green-600 hover:bg-green-700 px-3 py-2 rounded text-sm">Logout</button>
        </form>
      @else
        <a href="{{ url('/login') }}" class="block text-white hover:text-blue-400">Login</a>
        <a href="{{ url('/register') }}" class="block text-white hover:text-blue-400">Register</a>
      @endauth
    </div>
  </div>
</nav>
