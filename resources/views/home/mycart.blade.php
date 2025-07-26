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

    <div class="max-w-6xl mx-auto mt-10 px-4">
    <!-- Cart Table -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead class="bg-primary-100 text-primary-800 uppercase text-xs">
                <tr>
                    <th class="px-4 py-2">Product Title</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Remove</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php $value = 0; ?>
                @foreach ($cart as $cart)
                    <tr>
                        <td class="px-4 py-3">{{ $cart->product->title }}</td>
                        <td class="px-4 py-3">${{ $cart->product->price }}</td>
                        <td class="px-4 py-3">
                            <img src="/products/{{ $cart->product->image }}" alt="Product Image" class="w-24 h-24 object-cover rounded">
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ url('remove_product', $cart->id) }}" class="bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded transition">
                                Remove
                            </a>
                        </td>
                    </tr>
                    <?php $value = $value + $cart->product->price; ?>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Total Price -->
    <div class="mt-6 text-center">
        <h3 class="text-xl font-semibold text-primary-700">Total Price is: ${{ $value }}</h3>
    </div>

    <!-- Order Form -->
    <div class="mt-10 flex justify-center">
        <form action="{{ url('place_order') }}" method="POST" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-xl space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}" class="mt-1 w-full rounded border border-gray-300 px-4 py-2 focus:ring-primary-500 focus:border-primary-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <textarea name="address" class="mt-1 w-full rounded border border-gray-300 px-4 py-2 focus:ring-primary-500 focus:border-primary-500" required>{{ Auth::user()->address }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="mt-1 w-full rounded border border-gray-300 px-4 py-2 focus:ring-primary-500 focus:border-primary-500" required>
            </div>

            <!-- Payment Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <button type="submit" class="w-full sm:w-1/2 bg-green-500 hover:bg-green-600 text-white flex items-center justify-center gap-2 py-2 rounded transition">
                    <i class="fas fa-box"></i>
                    Cash on Delivery
                </button>
                <a href="{{ url('stripe', $value) }}" class="w-full sm:w-1/2 bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center gap-2 py-2 rounded transition">
                    
                    Pay Using Card
                </a>
            </div>
        </form>
    </div>
</div>


        @include('home.footer')

</body>

</html>