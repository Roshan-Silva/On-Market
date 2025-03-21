<!DOCTYPE html>
<html lang="en">

            
            <head>
                @include('home.css')
                <style>
                    table {
                      font-family: Arial, Helvetica, sans-serif;
                      border-collapse: collapse;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      padding: 15px;
                    }
                    
                    td, th {
                      border: 2px solid black;
                      text-align: center;
                      padding: 8px;
                    }
                    
                    tr:nth-child(even) {
                      background-color: #dddddd;
                    }
                    </style>
            </head>
            
            <body>
              <div class="hero_area">
                <!-- header section strats -->
            
                    @include('home.header')
            
                <!-- end header section -->
            
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                    
                    
                @foreach ($order as $orders)
                    <tr>
                    <td>{{ $orders->name }}</td>
                    <td>{{ $orders->rec_address }}</td>
                    <td>{{ $orders->phone }}</td>
                    <td>{{ $orders->product->title }}</td>
                    <td>{{ $orders->product->price }}</td>
                    
                    <td><img width="300" height="250" src="{{ asset('products/'.$orders->product->image) }}" alt=""></td>
                    <td>{{ $orders->status }}</td>
                
                    </tr>
                @endforeach
                </table>
               
            
              <!-- info section -->
            
                    @include('home.footer')
            
            </body>
            
            </html>
            <th>Product Title</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        
        
    @foreach ($order as $orders)
        <tr>
        <td>{{ $orders->name }}</td>
        <td>{{ $orders->rec_address }}</td>
        <td>{{ $orders->phone }}</td>
        <td>{{ $orders->product->title }}</td>
        <td>{{ $orders->product->price }}</td>
        
        <td><img src="{{ asset('products/'.$orders->product->image) }}" alt=""></td>
    
        </tr>
    @endforeach
    </table>
</body>
</html>