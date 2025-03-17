<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
       $category = new Category;
       $category->Category_name = $request->category;
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
        $data = Category::find($id);
        $data->Category_name = $request->category;
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
        return view('admin.edit_product',compact('data'));
    }
}
