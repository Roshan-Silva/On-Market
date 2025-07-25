<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        input[type='text']
        {
            width: 400px;
            height: 50px;
        }

        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        .table_deg
        {
            text-align: center;
            border: 2px solid yellowgreen;
            margin: auto;
            padding-top: 50px;
            width: 600px;
        }

        th
        {
            background-color: skyblue;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        td
        {
            padding: 10px;
            color: white;
            border: 1px solid skyblue;
            
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

            <h1 style="color: white;">Add Category</h1>

            <div class = "div_deg">

            <form action="{{ url('add_category') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div>
                <input type="text" name="category" placeholder="Category Name">
              </div><br>
              <div>
                <input type="file" name="image">
              </div><br>
              <div>
                <input class="btn btn-primary" type="submit" value="Add category">
              </div>
            </form>

            </div>

            <table class="table_deg">
                <tr>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($data as $data)
                    
                <tr>
                    <td>{{ $data->Category_name }}</td>
                    <td>
                      <img src="{{ asset('images/' . $data->image) }}" alt="Category Image" style="width: 100px; height: 100px;">
                    </td>
                    <td><a class="btn btn-success" href="{{ url('edit_category',$data->id) }}">Edit</a>
                    <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a></td>
                </tr>

                @endforeach

            </table>

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