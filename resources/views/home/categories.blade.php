<section class="shop_section layout_padding">
    <div class="container">
      <div class="relative bg-gradient-to-br from-primary-50 to-white dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-primary-800 dark:text-white mb-8 animate-bounce-slow">Product Categories</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              @foreach ($categories as $category)
                
                <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl relative text-sm">
                  <div class="aspect-w-1 aspect-h-1">
                    <img src="images/{{ $category->image }}" alt="image" class="w-full object-cover rounded-t-xl">
                    <div class="mt-3 flex justify-center">
                    <a href="{{ url('category_products', $category->id) }}" 
                      class="bg-primary-500 hover:bg-primary-600 text-white text-center py-1.5 px-4 rounded-md transition-all shadow-sm hover:shadow-md text-sm w-full">
                      <span class="whitespace-normal break-words">{{ $category->Category_name }}</span>
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