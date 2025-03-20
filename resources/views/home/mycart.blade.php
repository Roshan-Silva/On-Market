<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        table{
            width: 800px;
            border: 2px solid black;
            text-align: center;
        }
        th{
            border: 2px solid black;
            text-align: center;
            color: white;
            background-color: black;
            font-size: 20px;
            font-weight: bold;
        }
        td{
            border: 2px solid skyblue;
        }
    </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

        @include('home.header')

    <!-- end header section -->

    <div class="div_deg">
        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            @foreach ($cart as $cart)
                
            <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>
                    <img width="150" src="/products/{{$cart->product->image}}">
                </td>
            </tr>

            @endforeach
        </table>
    </div>


   

  <!-- info section -->

        @include('home.footer')

</body>

</html>