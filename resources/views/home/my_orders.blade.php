<!DOCTYPE html>
<html lang="en">

            
            <head>
                @include('home.css')
                <style>
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
            