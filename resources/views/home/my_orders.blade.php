<!DOCTYPE html>
<html lang="en">

            
<head>
        table {
          font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
          border-collapse: separate;
          border-spacing: 0;
          border-bottom: 2px solid #323131;
          width: 100%;
          max-width: 1200px;
          margin: 20px auto;
          overflow: hidden;
          border-radius: 8px;
          box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
          background: white;
          }

          th {
          background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
          color: white;
          font-weight: 600;
          text-align: center;
          padding: 16px;
          position: sticky;
          top: 0;
          text-transform: uppercase;
          letter-spacing: 0.5px;
          font-size: 0.9rem;
          }

          td {
          padding: 14px;
          text-align: center;
          border: 1px solid #323131;
          border-radius: 8px;
          transition: all 0.2s ease;
          color: #333;
          }

          tr:not(:first-child):hover td {
          background-color: rgba(58, 123, 213, 0.05);
          transform: translateY(-1px);
          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
          }

          tr:nth-child(even) {
          background-color: #f8fafc;
          }

          /* Modern striped effect */
          tr:nth-child(odd) {
          background-color: white;
          }

          /* Remove border from last row */
          tr:last-child td {
          border-bottom: none;
          }

          /* Responsive adjustments */
          @media (max-width: 768px) {
          table {
            border-radius: 8px;
          }

          th, td {
            padding: 12px 8px;
            font-size: 0.85rem;
          }
          }
      </style> --}}
      <script src="https://cdn.tailwindcss.com"></script>
      
</head>

<body>
  <div class="hero_area">

    @include('home.header')

 @foreach ($order->sortByDesc('created_at') as $orders)
    
  
  <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
    <div class="flex justify-start item-start space-y-2 flex-col">
        <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Order {{$orders->id}}</h1>
        <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">{{ $orders->updated_at }}</p>
    </div> 
    <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
        <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
            <div class="flex flex-col justify-start items-start dark:bg-gray-1000 bg-gray-200 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">{{ $orders->name }}’s products</p>
                <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                  @foreach($orders->products as $product)
                    <div class="pb-4 md:pb-8 w-full md:w-40">
                        <img class="w-full hidden md:block" src="{{ asset('products/'.$product->image) }}" alt="dress" />
                        <img class="w-full md:hidden" src="{{ asset('products/'.$product->image) }}" alt="dress" />
                    </div>
                  @endforeach
                    <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                        <div class="w-full flex flex-col justify-start items-start space-y-8">
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-800 text-gray-800 font-bold">Ship to: </span> {{$orders->rec_address}}</p>
                                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-800 text-gray-800 font-bold">Order status: </span>{{$orders->status}} </p>
                                <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-800 text-gray-800 font-bold">Payment method: </span>{{$orders->payment_status}} </p>
                            </div>
                        </div>
                        <div class="flex justify-between space-x-6 items-start w-full">
                            <p class="text-base dark:text-white xl:text-lg leading-6 font-bold">Total Price: <span class="text-base dark:text-white xl:text-lg leading-6"> {{$orders->total}}$</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  @endforeach
        

    @include('home.footer')

</body>

</html>
            