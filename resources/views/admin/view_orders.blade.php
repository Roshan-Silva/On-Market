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
                        <th>Customrer Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Change Status</th>
                        <th>Print pdf</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->rec_address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->product->title}}</td>
                        <td>{{$data->product->price}}</td>
                        <td><img width="150" src="products/{{ $data->product->image }}"></td>
                        <td>
                            @if($data->status == 'in progress')
                            <span style="color: red;">{{$data->status}}</span>
                        @elseif($data->status == 'On the way')
                            <span style="color: orange;">{{$data->status}}</span>
                        @else
                            <span style="color: green;">{{$data->status}}</span>
                        @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('on_the_way',$data->id) }}">On the way</a>
                            <a class="btn btn-success" href="{{ url('delivered',$data->id) }}">Delivered</a>
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ url('print_pdf',$data->id) }}">Print pdf</a>
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
</htmls
