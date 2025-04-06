<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style>
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 4rem 0;
            padding: 2rem;
            background: linear-gradient(135deg, #e1e2e4 0%, #e4e8eb 100%);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }
    
        table {
            width: 100%;
            max-width: 800px;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.1);
            background: white;
        }
    
        th {
            padding: 1.2rem;
            
            text-align: center;
            color: white;
            background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            position: sticky;
            top: 0;
        }
    
        td {
            padding: 1rem;
            border: 1px solid #323131;
            transition: all 0.3s ease;
            text-align: center;
            font-size: 1rem;
            align-items: center;
            color: #2c3e50;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border-color: #2c2b2b;
        }
    
        tr:hover td {
            background-color: rgba(58, 123, 213, 0.05);
            transform: translateY(-1px);
        }
    
        .cart_value {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2rem 0;
            padding: 1.5rem;
            background: linear-gradient(135deg, #e1e2e4 0%, #e4e8eb 100%);
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
        }
        .form_div {
    padding: 1.25rem;
    margin: 1rem 0;
    background: linear-gradient(135deg, #e1e2e4 0%, #e4e8eb 100%);
    border-radius: 8px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
}

label {
    display: inline-block;
    width: 120px;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: #4a5568;
    font-size: 0.9rem;
}

.div_gap {
    margin: 1rem 0;
    padding: 1rem;
    background: #f8fafc;
    border-radius: 8px;
    border: 1px solid #edf2f7;
}

input, select, textarea {
    padding: 0.6rem 0.8rem;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    width: 100%;
    max-width: 300px;
    font-size: 0.9rem;
    transition: all 0.2s ease;
    background-color: #f8fafc;
}

input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: #4299e1;
    box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.2);
    background-color: #ffffff;
}

/* Compact form layout */
.form-row {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
}

/* Optional: Add this for even more compact inline forms */
.form-inline .form-row {
    display: inline-flex;
    margin-right: 1rem;
}
    
        button, .btn {
            padding: 0.8rem 2rem;
            background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(58, 123, 213, 0.3);
        }
    
        button:hover, .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(58, 123, 213, 0.4);
        }

        .payment-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }
    
    .payment-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        text-decoration: none;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .delivery-btn {
        background: linear-gradient(135deg, #4ade80, #22c55e);
        color: white;
    }
    
    .card-btn {
        background: linear-gradient(135deg, #6366f1, #4338ca);
        color: white;
    }
    
    .payment-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }
    
    .payment-btn:active {
        transform: translateY(0);
    }
    
    /* For Font Awesome icons */
    .payment-btn i {
        font-size: 1.1rem;
    }
    
    /* Responsive adjustment */
    @media (max-width: 480px) {
        .payment-buttons {
            flex-direction: column;
            width: 100%;
        }
        
        .payment-btn {
            width: 100%;
        }
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                <th>Remove</th>
            </tr>

            <?php
                $value = 0;
            ?>

            @foreach ($cart as $cart)
                
            <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>
                    <img width="150" src="/products/{{$cart->product->image}}">
                </td>
                <td>
                    <a class="btn btn-danger" href="{{url('remove_product', $cart->id)}}">Remove</a>
                </td>
            </tr>

            <?php
                $value = $value + $cart->product->price;
            ?>

            @endforeach
        </table>
        <br>
        
    
    </div>

    <div class="cart_value">
        <h3>Total Price is : ${{$value}}</h3>
    </div>

    <div class="form_div" style="align-content: center; display: flex; justify-content: center;">
        <form action="{{url('place_order')}}" method="post">
            @csrf
            <div class="div_gap">
                <label>Name:</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="div_gap">
                <label>Address:</label>
                <textarea name="address">{{Auth::user()->address}}</textarea>
            </div>
            <div class="div_gap">
                <label>Phone:</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>
            <div class="payment-buttons">
                <button type="submit" class="payment-btn delivery-btn">
                    <i class="fas fa-box"></i>
                    <span>Cash on Delivery</span>
                </button>
                
                <a href="{{ url('stripe',$value) }}" class="payment-btn card-btn">
                    <i class="far fa-credit-card"></i>
                    <span>Pay Using Card</span>
                </a>
            </div>
            <div>
                
            </div>
        </form>
    </div>




   

  <!-- info section -->

        @include('home.footer')

</body>

</html>