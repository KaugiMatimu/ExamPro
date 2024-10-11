<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
class AdminController extends Controller
{
    public function view_category(){
        $data = category::all();
        return view('admin.category', compact('data'));
    }
    public function add_category(Request $request){
        $data = new category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function delete_category($id){
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_products(){
        $category = category::all();
        return view('admin.products', compact('category'));
    }
    public function add_products(Request $request){
        $product = new product;
        $product ->title = $request ->title;
        $product ->description = $request ->description;
        $product ->price = $request -> price;
        $product -> quantity = $request ->quantity;
        $product ->category = $request ->category;
        $product -> discount_price = $request-> discount_price;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product -> image = $imagename;

        $product ->save();
        return redirect()->back()->with('message', 'Product Added Successfully');
    }
    public function show_products(){
        $product = product::all();
        return view('admin.show_products', compact('product'));
    }
    public function delete_products($id){
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
    public function update_products($id){
        $product = product::find($id);
        $category = category::all();
        return view('admin.update_products', compact('product', 'category'));
    }
    public function update_product_confirm(Request $request, $id){
        $product = product::find($id);
        $product -> title = $request->title;
        $product ->description = $request->description;
        $product ->price = $request -> price;
        $product -> quantity = $request ->quantity;
        $product ->category = $request ->category;
        $product -> discount_price = $request-> discount_price;
        $image = $request->image;
        
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $product -> image = $imagename;
        }


        $product ->save();
        return redirect()->back()->with('message', 'Product Updated Successfully');
    }
}