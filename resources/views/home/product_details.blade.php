
<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .detail-box
        {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .img-box
        {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
        }
    </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

        @include('home.header')

    <!-- end header section -->

    <div class="col-md-12">
        <div class="box">
          
            <div class="img-box">
              <img width="400" src="/products/{{ $data->image }}" alt="">
            </div>
            <div class="detail-box">
              <h6>Title :
                {{ $data->title }}
              </h6>
              <h6>
                Price :
                <span>
                  ${{ $data->price }}
                </span>
              </h6>
              <h6>
                {{-- Avalble Quantity :
                <span>
                  {{ $data->quantity }}
                </span>
              </h6>
              <h6>Category :
                {{ $data->category }}
              </h6>
              <h6>
                <p>
                  Description :
                  {{ $data->description }}
                </p>
              </h6>
            </div> --}}

                
                
              
            </div>
            

            
         
        </div>
      </div>

  
  






   

  <!-- info section -->

        @include('home.footer')

</body>

</html>