<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
</head>
<body>
    <h1>ADMIN</h1>

    <form method="POST" action="{{ route('logout') }}">
     @csrf
     <input type="submit" value="logout" />

                            
    </form>
</body>
</html>