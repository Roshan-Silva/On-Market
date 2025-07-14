<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
       .table_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        table{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        td{
            padding: 10px;
            border: 1px solid yellowgreen;
            text-align: center;
            color: white;
        }
        th{
            padding: 10px;
            background-color: skyblue;
            text-align: center;
            color: white;
            font-weight: bold;
            border: 1px solid yellowgreen;
        }
    </style>
  
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
              <div class="table_center">
                <table>
                    <tr>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Details</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Change Status</th>
                        <th>Print PDF</th>
                    </tr>

                    @foreach($data as $order)
                    <tr>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->rec_address }}</td>
                        <td>{{ $order->phone }}</td>
                        
                        <td>
                            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                                @foreach ($order->products as $product)
                                    <div style="border: 1px solid #ccc; padding: 10px; background-color: #2e3d49; border-radius: 5px;">
                                        <div style="font-weight: bold; color: #fff;">{{ $product->title }}</div>
                                        <img width="100" src="{{ asset('products/' . $product->image) }}" alt="{{ $product->title }}">
                                    </div>
                                @endforeach
                            </div>
                        </td>


                        <td>{{ $order->total }}$</td>

                        <td>
                            @if($order->status == 'in progress')
                                <span style="color: red;">{{ $order->status }}</span>
                            @elseif($order->status == 'On the way')
                                <span style="color: orange;">{{ $order->status }}</span>
                            @else
                                <span style="color: green;">{{ $order->status }}</span>
                            @endif
                        </td>

                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ url('on_the_way', $order->id) }}">On the way</a><br><br>
                            <a class="btn btn-success btn-sm" href="{{ url('delivered', $order->id) }}">Delivered</a>
                        </td>

                        <td>
                            <a class="btn btn-info btn-sm" href="{{ url('print_pdf', $order->id) }}">Print PDF</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
              </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
