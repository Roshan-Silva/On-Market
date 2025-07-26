<!DOCTYPE html>
<html>

<head>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

        @include('home.header')

    <!-- end header section -->


  </div>
  <!-- end hero area -->


  <section class="pt-10 lg:px-20 md:px-10 px-10 text-blue-950">
      <h2 class="text-[38px] font-bold text-center">Why <span class="text-[#0074F2]">Choose Us</span></h2>
      <div class="lg:flex lg:gap-5 pt-9">
        <div class="lg:pt-2 pt-7">
          <h3 class="text-center font-medium text-xl">WE ARE PASSIONATE</h3>
          <p class="pt-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur porro quam reiciendis sequi libero, illo facilis non quisquam assumenda possimus, perferendis maiores aspernatur deleniti dignissimos quidem eligendi aliquam explicabo, suscipit ipsum magnam fugit sunt?</p>
        </div>
        <div class="lg:pt-2 pt-7">
          <h3 class="text-center font-medium text-xl">HONEST AND DEPENDABLE</h3>
          <p class="pt-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur porro quam reiciendis sequi libero, illo facilis non quisquam assumenda possimus, perferendis maiores aspernatur deleniti dignissimos quidem eligendi aliquam explicabo, suscipit ipsum magnam fugit sunt?</p>
        </div>
        <div class="lg:pt-2 pt-7">
          <h3 class="text-center font-medium text-xl">WE ARE ALWAYS IMPROVING</h3>
          <p class="pt-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur porro quam reiciendis sequi libero, illo facilis non quisquam assumenda possimus, perferendis maiores aspernatur deleniti dignissimos quidem eligendi aliquam explicabo, suscipit ipsum magnam fugit sunt?</p>
        </div>
      </div>
    </section>
    <br class="my-10">

   

  <!-- info section -->

        @include('home.footer')

</body>

</html>