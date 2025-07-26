<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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

        @include('home.header')

        <section class="shop_section layout_padding">
        <div class="container">
        {{-- <div class="heading_container heading_center">
            <h2>
            Latest Products
            </h2>
        </div> --}}
        <div class="relative bg-gradient-to-br from-primary-50 to-white dark:from-gray-800 dark:to-gray-900">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-primary-800 dark:text-white mb-8 animate-bounce-slow">{{$category}}</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($products as $product)

                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl relative text-sm">

                    <div class="aspect-w-1 aspect-h-1">
                        <img src="{{ asset('products/' . $product->image) }}" alt="image" class="w-full object-cover rounded-t-xl">

                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-center">
                        <h3 class="text-sm font-semibold text-primary-800 dark:text-white truncate w-2/3">{{ $product->title }}</h3>
                        <p class="text-primary-600 font-bold text-sm w-1/3 text-right">${{ $product->price }}</p>
                        </div>

                        <div class="mt-3 flex gap-2">
                        <a href="{{ url('product_details', $product->id )}}" class="w-1/2 bg-gray-200 text-primary-700 hover:bg-gray-300 text-center py-1.5 px-2 rounded-md transition-all text-xs">
                            See Details
                        </a>
                        <a href="{{ url('add_to_cart', $product->id )}}" class="w-1/2 bg-primary-500 hover:bg-primary-600 text-white text-center py-1.5 px-2 rounded-md transition-all shadow-sm hover:shadow-md text-xs">
                            Add to Cart
                        </a>
                        </div>
                    </div>
                    </div>

                @endforeach
                </div>
            </div>
        </div>

        
        </div>
    </section>

        @include('home.footer')

    </div>
</body>
</html>