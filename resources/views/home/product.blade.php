<section class="shop_section layout_padding">
    <div class="container">
      {{-- <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div> --}}
      <div class="relative bg-gradient-to-br from-primary-50 to-white dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-primary-800 dark:text-white mb-8 animate-bounce-slow">Latest Products</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              @foreach ($product as $products)
                <!-- Product Cards with Enhanced Design -->
                <div class="bg-white dark:bg-gray-700 rounded-2xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-2 hover:shadow-2xl">
                    {{-- <img src="https://res.cloudinary.com/djv4xa6wu/image/upload/v1735722165/AbhirajK/Abhirajk.webp" 
                        alt="Casual Wear" class="w-full h-64 object-cover"> --}}
                    <img src="products/{{ $products->image }}" alt="image" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-primary-800 dark:text-white">{{ $products->title }}</h3>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-primary-600 font-bold">${{ $products->price }}</p>
                            <span class="bg-primary-100 text-primary-800 px-2 py-1 rounded-full text-xs">New</span>
                        </div>
                        <a class="mt-4 w-full bg-primary-500 text-white py-2 px-4 rounded-lg hover:bg-primary-600 transition-colors" href="{{ url('add_to_cart', $products->id )}}">
                            {{-- <i class="fas fa-shopping-cart mr-2"></i> --}}
                            Add to Cart
                        </a>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
      </div>


      {{-- <div class="row">

        @foreach ($product as $products)
        

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            
              <div class="img-box">
                <img src="products/{{ $products->image }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{ $products->title }}
                </h6>
                <h6>
                  
                  <span>
                    ${{ $products->price }}
                  </span>
                </h6>
                
              </div>
              <div style="display: flex; justify-content: space-between; padding: 0 10px;">
                <a class="btn btn-danger" href="{{ url('product_details', $products->id )}}">Details</a>
                <a class="btn btn-primary" href="{{ url('add_to_cart', $products->id )}}">Add to Cart</a>
              </div>
              

              
           
          </div>
        </div>

        @endforeach

        

      </div> --}}
      
    </div>
  </section>