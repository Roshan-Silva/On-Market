<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
    
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    table{
        text-align:center;
        border: 2px solid yellowgreen;
    }
    th{
        background-color: skyblue;
        color: white;
        padding: 10px;
    }
    td{
        border: 1px solid skyblue;
        padding: 10px;
        color: white;
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
            
          <div class=div_deg>

            <table>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                </tr>

                @foreach ($data as $datas )
                <tr>
                    <td>{{ $datas->title }}</td>
                    <td>{{ $datas->description }}</td>
                    <td>{{ $datas->price }}</td>
                    <td>{{ $datas->quantity }}</td>
                    <td>{{ $datas->category }}</td>
                    <td><img height="120" width="200" src="products/{{ $datas->image }}"></td>
                    <td><a class="btn btn-success" href={{ url('edit_product',$datas->id) }}>Edit</td>
                    <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('delete_product',$datas->id) }}">Delete</a></td>
                </tr>
                 
                @endforeach
                
                
            </table>

          </div>

          <div class="div_deg">
            {{ $data->onEachSide(1)->links() }}
        </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    <script type="text/javascript">
        function confirmation(ev) 
        {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({

                title: "Are you sure to delete this?",
                text: "This delete will be permanent",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel)=>{
                if(willCancel){
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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