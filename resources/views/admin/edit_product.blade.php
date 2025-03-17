<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
      .div_deg
      {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
      }

      label {
        display: inline-block;
        width: 250px;
        font-size: 18px!important;
        color: white!important;
        padding: 20px;
      }

      textarea {
        width: 450px;
        height: 80px;
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

            <h2 style="color: white">Update Product</h2>
            
             <div class="div_deg">

              <form action="{{ url('update_product',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                  <label>Product Title</label>
                  <input type="text" name="title" value="{{ $data->title }}">
                </div>
                <div>
                  <label>Description</label>
                  <textarea name="description">{{ $data->description }}</textarea>
                </div>
                <div>
                  <label>Price</label>
                  <input type="text" name="price" value="{{ $data->price}}">
                </div>
                <div>
                  <label>Quantity</label>
                  <input type="number" name="quantity" value="{{ $data->quantity }}">
                </div>
                <div>
                  <label>Category</label>
                  <select name="category">
                    <option>Select a option</option>
                    @foreach($category as $category)
                      <option value="{{ $category->Category_name }}">{{ $category->Category_name }}</option>
                      @endforeach
                  </select>
                </div>
                <div>
                  <label>Current Image</label>
                  <img src="/products/{{ $data->image }}" width="150px" height="100px">
                </div>
                <div>
                  <label>New Image</label>
                  <input type="file" name="image">
                <div>
                  <input class="btn btn-success" type="submit" value="Update Product">
                </div>

              </form>

                
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