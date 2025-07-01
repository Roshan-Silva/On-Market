{{-- <style>
  .slider_section {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    overflow: hidden;
    display: flex;
    align-items: center;
  }

  .slider_section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(ellipse at center, rgba(255,255,255,0.1) 0%, transparent 70%);
    pointer-events: none;
  }

  .slider_container {
    width: 100%;
    position: relative;
    z-index: 2;
  }

  .carousel {
    position: relative;
  }

  .carousel-inner {
    border-radius: 0;
  }

  .carousel-item {
    padding: 4rem 0;
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .carousel-item.active {
    animation: slideInUp 1s ease-out;
  }

  @keyframes slideInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .container-fluid {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
  }

  .detail-box {
    color: white;
    animation: fadeInLeft 1.2s ease-out 0.3s both;
    flex: 1;
    min-width: 400px;
    padding-right: 2rem;
  }

  @keyframes fadeInLeft {
    from {
      opacity: 0;
      transform: translateX(-40px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .detail-box h1 {
    font-size: 3.5rem;
    font-weight: 900;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #ffffff 0%, rgba(255,255,255,0.9) 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
    position: relative;
  }

  .detail-box h1::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 80px;
    height: 4px;
    background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
    border-radius: 2px;
    animation: expandWidth 1.5s ease-out 0.8s both;
  }

  @keyframes expandWidth {
    from { width: 0; }
    to { width: 80px; }
  }

  .detail-box p {
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 2.5rem;
    color: rgba(255, 255, 255, 0.9);
    max-width: 500px;
    font-weight: 400;
  }

  .detail-box a {
    display: inline-block;
    padding: 1rem 2.5rem;
    background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1rem;
    box-shadow: 0 8px 30px rgba(0, 242, 254, 0.3);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .detail-box a::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%);
    transition: left 0.5s ease;
  }

  .detail-box a:hover::before {
    left: 0;
  }

  .detail-box a:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0, 242, 254, 0.4);
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
  }

  .detail-box a:active {
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(0, 242, 254, 0.5);
  }

  .img-box {
    position: relative;
    animation: fadeInRight 1.2s ease-out 0.5s both;
    flex: 1;
    min-width: 400px;
  }

  @keyframes fadeInRight {
    from {
      opacity: 0;
      transform: translateX(40px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .img-box::before {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    right: 20px;
    bottom: 20px;
    background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
    border-radius: 30px;
    z-index: -1;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
  }

  .img-box img {
    width: 100% !important;
    max-width: 600px;
    height: 400px !important;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .img-box:hover img {
    transform: scale(1.05);
    box-shadow: 0 30px 80px rgba(0,0,0,0.4);
  }

  /* Floating elements animation */
  .slider_section::after {
    content: '';
    position: absolute;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(0,242,254,0.1) 0%, transparent 70%);
    border-radius: 50%;
    top: 10%;
    right: 10%;
    animation: float 6s ease-in-out infinite;
    pointer-events: none;
  }

  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
  }

  /* Additional floating elements */
  .floating-element {
    position: absolute;
    pointer-events: none;
    z-index: 1;
  }

  .floating-element:nth-child(1) {
    width: 100px;
    height: 100px;
    background: radial-gradient(circle, rgba(79,172,254,0.15) 0%, transparent 70%);
    border-radius: 50%;
    top: 20%;
    left: 5%;
    animation: float 8s ease-in-out infinite reverse;
  }

  .floating-element:nth-child(2) {
    width: 60px;
    height: 60px;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    border-radius: 50%;
    bottom: 30%;
    right: 15%;
    animation: float 10s ease-in-out infinite;
  }

  /* Responsive Design */
  @media (max-width: 992px) {
    .row {
      flex-direction: column;
      text-align: center;
      gap: 2rem;
    }

    .detail-box {
      padding-right: 0;
      min-width: auto;
    }

    .detail-box h1 {
      font-size: 2.8rem;
    }

    .detail-box h1::after {
      left: 50%;
      transform: translateX(-50%);
    }

    .img-box {
      min-width: auto;
    }

    .img-box img {
      max-width: 500px;
      height: 350px !important;
    }
  }

  @media (max-width: 768px) {
    .slider_section {
      min-height: 90vh;
    }

    .carousel-item {
      padding: 2rem 0;
    }
    
    .container-fluid {
      padding: 0 1rem;
    }

    .detail-box h1 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
    }

    .detail-box p {
      font-size: 1rem;
      margin-bottom: 2rem;
    }

    .detail-box a {
      padding: 0.8rem 2rem;
      font-size: 0.9rem;
    }

    .img-box img {
      max-width: 400px;
      height: 300px !important;
    }

    .img-box::before {
      top: -15px;
      left: -15px;
      right: 15px;
      bottom: 15px;
    }
  }

  @media (max-width: 576px) {
    .detail-box h1 {
      font-size: 1.8rem;
    }

    .img-box img {
      max-width: 350px;
      height: 250px !important;
    }

    .row {
      gap: 1.5rem;
    }
  }

  /* Smooth scroll behavior */
  html {
    scroll-behavior: smooth;
  }

  /* Performance optimizations */
  .img-box img {
    will-change: transform;
  }

  .detail-box a {
    will-change: transform, box-shadow;
  }
</style> --}}

<section class="px-6 py-16 md:py-32 bg-gray-300 dark:bg-gray-900">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-10">

    <!-- Text Content -->
    <div class="w-full md:w-1/2 text-center md:text-left">
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
        Welcome to <br class="hidden md:block" />
        our <span class="text-red-500">On Market</span>
      </h1>
      <p class="text-base sm:text-lg mb-8 text-gray-700 dark:text-gray-300">
        Discover an extraordinary collection of handcrafted gifts that tell stories, create memories, and bring joy to every special moment. From artisanal treasures to modern classics, find the perfect gift that speaks from the heart.
      </p>
      <a href="#" class="bg-red-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg transition duration-200 inline-block">
        Shop Now
      </a>
    </div>

    <!-- Hero Image -->
    <div class="w-full md:w-1/2">
      <img src="images/HomeSlider02.jpeg" alt="Hero Image" class="rounded-lg shadow-lg w-full max-w-md mx-auto md:max-w-full" />
    </div>
  </div>
</section>


