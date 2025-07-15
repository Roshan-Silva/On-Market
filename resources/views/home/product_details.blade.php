
<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    
<script src="https://cdn.tailwindcss.com"></script>
<script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }
        
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50:  '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d'
                        }
                    },
                }
            }
        }
    </script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

        @include('home.header')

    <!-- end header section -->

    <div class="max-w-4xl mx-auto my-10 bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden p-6">
  <div class="flex flex-col md:flex-row gap-6">
    
    <!-- Image -->
    <div class="flex-shrink-0">
      <img src="/products/{{ $data->image }}" alt="Product Image" class="w-full md:w-96 h-auto object-cover rounded-lg">
    </div>

    <!-- Product Details -->
    <div class="flex-1 space-y-4 text-gray-800 dark:text-gray-100">
      <h2 class="text-2xl font-bold text-primary-700 dark:text-white">{{ $data->title }}</h2>

      <p class="text-lg font-semibold">
        Price: <span class="text-primary-600">${{ $data->price }}</span>
      </p>

      <p class="text-sm">
        Available Quantity: <span class="font-medium">{{ $data->quantity }}</span>
      </p>

      <p class="text-sm">
        Category: <span class="font-medium">{{ $data->category }}</span>
      </p>

      <div>
        <p class="text-sm font-semibold mb-1">Description:</p>
        <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">{{ $data->description }}</p>
      </div>

      <!-- Add to Cart Button -->
      <div class="pt-4">
        <a href="{{ url('add_to_cart', $data->id )}}"
           class="inline-block bg-primary-500 hover:bg-primary-600 text-white text-sm font-medium py-2 px-6 rounded-lg transition-all shadow hover:shadow-lg">
          Add to Cart
        </a>
      </div>
    </div>

  </div>
</div>


  
  






   

  <!-- info section -->

        @include('home.footer')

</body>

</html>