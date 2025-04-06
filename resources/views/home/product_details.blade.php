
<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .detail-box {
          margin: 2.5rem 0;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          text-align: center;
          padding: 2rem;
          background: linear-gradient(135deg, #e1e2e4 0%, #e4e8eb 100%);
          backdrop-filter: blur(10px);
          border-radius: 16px;
          box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
          border: 1px solid rgba(255, 255, 255, 0.2);
          transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
          max-width: 800px;
          margin-left: auto;
          margin-right: auto;
      }

      .detail-box:hover {
          transform: translateY(-5px);
          box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
      }

      .img-box {
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 2rem;
          margin: 1.5rem 0;
          background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.05) 100%);
          border-radius: 16px;
          overflow: hidden;
          position: relative;
          transition: all 0.4s ease;
      }

      .img-box::before {
          content: '';
          position: absolute;
          width: 150%;
          height: 150%;
          background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
          animation: rotate 15s linear infinite;
          z-index: 0;
      }

      .img-box img {
          position: relative;
          z-index: 1;
          max-width: 100%;
          height: auto;
          transition: transform 0.5s ease;
          filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.15));
      }

      .img-box:hover img {
          transform: scale(1.05);
      }

      @keyframes rotate {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
      }

      /* Responsive adjustments */
      @media (max-width: 768px) {
          .detail-box {
              padding: 1.5rem;
              margin: 1.5rem 0;
          }
          
          .img-box {
              padding: 1.5rem;
          }
      }

      .detail-box h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 1rem;
    position: relative;
    display: inline-block;
}

.detail-box h2::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 60px;
    height: 4px;
    background: #3b82f6;
    border-radius: 2px;
}

.detail-box p {
    font-family: 'Inter', sans-serif;
    font-size: 1.1rem;
    color: #475569;
    line-height: 1.9;
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
                Avalble Quantity :
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
            </div>

                
                
              
            </div>
            

            
         
        </div>
      </div>

  
  






   

  <!-- info section -->

        @include('home.footer')

</body>

</html>