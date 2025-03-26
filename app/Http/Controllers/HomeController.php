<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Stripe;



class HomeController extends Controller
{
    public function Index(){
        $user = User::where('usertype','user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $delivered = Order::where('status','delivered')->get()->count();
        return view ('admin.index',compact('user','product','order','delivered'));
    }

    public function home(){
        $product = Product::all();
        if(Auth::id()){
            $user = Auth::User();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
        }
        else{
            $count = "";
        }
        
        return view ('home.index',compact('product','count'));
    }

    public function login_home(){
        $product = Product::all();
        if(Auth::id()){
            $user = Auth::User();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
        }
        else{
            $count = "";
        }
        return view('home.index',compact('product','count'));
    }

    public function product_details($id){
        $data = Product::find($id);
        if(Auth::id()){
            $user = Auth::User();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
        }
        else{
            $count = "";
        }
        return view ('home.product_details',compact('data','count'));
    }

    public function add_to_cart($id){
        $product_id = $id;
        $user = Auth::User();
        $user_id = $user->id;
        $data = new Cart();
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product added to cart successfully');
        return redirect()->back();
        /*return view('home.add_to_cart',compact('product_id'));*/

    }
    
    public function mycart(){
        if(Auth::id()){
            $user = Auth::User();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
            $cart = Cart::where('user_id',$userid)->get();
        }
        return view('home.mycart',compact('count','cart'));
    }

    public function remove_product($id){
        $data = Cart::find($id);
        $data->delete();
        toastr()->timeOut(10000)->closeButton()->addWarning('Product removed from cart successfully');
        return redirect()->back();
    }

    public function place_order(Request $request){
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $user_id = Auth::id();
        $cart = Cart::where('user_id',$user_id)->get();

        foreach($cart as $carts){
            $order = new Order();
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->user_id = $user_id;
            $order->product_id = $carts->product_id;
            $order->save();
            
        }
        $cart_remove = Cart::where('user_id',$user_id)->get();
        foreach($cart_remove as $remove){
            $data = Cart::find($remove->id);
            $data->delete();

        }
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product ordered successfully');
        return redirect()->back();
        
    }

    public function my_orders(){
        $user = Auth::User();
        $userid = $user->id;
        $count = Cart::where('user_id',$userid)->count();
        $order = Order::where('user_id',$userid)->get();
        return view('home.my_orders',compact('order','count'));
        
    }

    public function stripe($value)
    {
        return view('home.stripe',compact('value'));
    }

    public function stripePost(Request $request,$value)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([

                "amount" => $value * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 

        ]);

        Session::flash('success', 'Payment successful!');
        return back();
    }


}
