<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <center>

    <h3>Customer name : {{$data->name}}</h3>
    <h3>Customer address : {{$data->rec_address}}</h3>
    <h3>Customer phone : {{$data->phone}}</h3>
    @foreach ($data->products as $product)
        <h2>Product title : {{$product->title}}</h2>
    @endforeach
    
    <h2>Product price : {{$data->total}}</h2>
    @foreach ($data->products as $product)
        <img width="250" height="300" src="/products/{{ $product->image }}">
    @endforeach
    

    </center>
</body>
</html>