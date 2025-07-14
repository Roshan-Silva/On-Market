<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;

use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
       $request->validate([
        'category' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

       $category = new Category;
       $category->Category_name = $request->category;
       $category->image = $imageName; // Save the image name to the database
       $category->save();

       toastr()->timeOut(10000)->closeButton()->addSuccess('Category added successfully');

       return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Category deleted successfully');

        return redirect()->back();
    }

    public function edit_category($id){
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request, $id){

        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $data = Category::find($id);
        $data->Category_name = $request->category;

            // If you want to update the image, you can add validation and logic here
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data->image = $imageName; // Update the image name
        }
        
        $data->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Category updated successfully');

        return redirect('/view_category');
    }

    public function add_product(){
        $category = Category::all();
        return view('admin.add_product',compact('category'));
    }

    public function upload_product(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->quantity = $request->qty;

        $image = $request->image;
        if ($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products',$imagename);
            $product->image = $imagename;
        }
       
        $product->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Product added successfully');

        return redirect()->back();

    }

    public function view_products(){
        $data = Product::paginate(3);
        return view('admin.view_products',compact('data'));
    }

    public function delete_product($id){
        $data = Product::find($id);
        $image_path = public_path('products/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Product deleted successfully');

        return redirect()->back();
    }

    public function edit_product($id){
        $data = Product::find($id);
        $category = Category::all();
        return view('admin.edit_product',compact('data','category'));
    }

    public function update_product(Request $request, $id){
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->quantity = $request->quantity;

        $image = $request->image;
        if ($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products',$imagename);
            $product->image = $imagename;
        }
       
        $product->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Product updated successfully');

        return redirect('/view_products');
    }

    public function search_product(Request $request){
        $search = $request->search;
        $data = Product::where('title','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->paginate(3);
        return view('admin.view_products',compact('data'));
    }

    public function view_orders(){
        $data = Order::all();
        return view('admin.view_orders',compact('data'));
    }

    public function on_the_way($id){
        $data = Order::find($id);
        $data->status = 'On the way';
        $data->save();

        return redirect('/view_orders');
    }

    public function delivered($id){
        $data = Order::find($id);
        $data->status = 'Delivered';
        $data->save();

        return redirect('/view_orders');
    }

    public function print_pdf($id){
        $data= Order::find($id);
        $pdf = Pdf::loadView('admin.invoice',compact('data'));
        return $pdf->download('invoice.pdf');
    }
}
