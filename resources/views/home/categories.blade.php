<section class="shop_section layout_padding">
    <div class="container">
      <div class="relative bg-gradient-to-br from-primary-50 to-white dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-primary-800 dark:text-white mb-8 animate-bounce-slow">Product Categories</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              @foreach ($categories as $category)
                <!-- Product Cards with Enhanced Design -->
                <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl relative text-sm">
                  <!-- "New" badge -->
                  {{-- <span class="absolute top-2 right-2 bg-primary-100 text-primary-800 text-[10px] font-medium px-2 py-0.5 rounded-full shadow">
                    New
                  </span> --}}

                  <!-- Image -->
                  <div class="aspect-w-1 aspect-h-1">
                    <img src="images/{{ $category->image }}" alt="image" class="w-full object-cover rounded-t-xl">
                    <div class="mt-3 flex justify-center">
                    <a href="{{ url('category_products', $category->id) }}" 
                        class="bg-primary-500 hover:bg-primary-600 text-white text-center py-1.5 px-4 rounded-md transition-all shadow-sm hover:shadow-md text-sm">
                        <span>{{ $category->Category_name }}</span>
                    </a>
                    </div>
                  </div>

                  <!-- Product Info -->
                  {{-- <div class="p-4">
                    <div class="flex justify-between items-center">
                      <h3 class="text-sm font-semibold text-primary-800 dark:text-white truncate w-2/3">{{ $products->title }}</h3>
                      <p class="text-primary-600 font-bold text-sm w-1/3 text-right">${{ $products->price }}</p>
                    </div> --}}

                    <!-- Buttons -->
                    {{-- <div class="mt-3 flex gap-2">
                      <a href="{{ url('product_details', $products->id )}}" class="w-1/2 bg-gray-200 text-primary-700 hover:bg-gray-300 text-center py-1.5 px-2 rounded-md transition-all text-xs">
                        See Details
                      </a>
                      <a href="{{ url('add_to_cart', $products->id )}}" class="w-1/2 bg-primary-500 hover:bg-primary-600 text-white text-center py-1.5 px-2 rounded-md transition-all shadow-sm hover:shadow-md text-xs">
                        Add to Cart
                      </a>
                    </div>
                  </div> --}}
                </div>

              @endforeach
            </div>
        </div>
      </div>
    </div>
  </section>