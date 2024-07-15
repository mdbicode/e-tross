<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Custom;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }
    
    public function product() {
        $product = Product::all();
        return view('dashboard.product',compact('product'));
    }
    
    public function createProduct() {
        return view('dashboard.create_product');
    }
    
    public function storeProduct(Request $request) {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'stock' => 'integer',
            'gallery' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

         // Simpan gambar (gallery) ke dalam storage/public/uploads
         $imagePath = $request->file('gallery')->store('img', 'public');

         // Buat dan simpan produk ke dalam database
         $product = new Product();
         $product->name = $request->name;
         $product->category = $request->category;
         $product->price = $request->price;
         $product->description = $request->description;
         $product->stock = $request->stock;
         $product->gallery = $imagePath; // simpan path gambar ke dalam database
         $product->save();
 
         return redirect('/dashboard/product')->with('success', 'Product added successfully!');
    }
    
    public function editProduct($id) {
        $product = Product::find($id);
        return view('dashboard.edit_product',compact('product'));
    }
    
    public function updateProduct(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'stock' => 'integer',
            'gallery' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->gallery = $request->gallery;
        $product->save();
    
        return redirect('/dashboard/product')->with('success', 'Product updated successfully.');
    }

    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect('/dashboard/product')->with('success', 'Product deleted successfully.');
    }

    public function order() {
        $order = Order::latest()->get();
        return view('dashboard.order',compact('order'));
    }
    public function custom() {
        $customs = Custom::latest()->get();
        return view('dashboard.custom',compact('customs'));
    }
}