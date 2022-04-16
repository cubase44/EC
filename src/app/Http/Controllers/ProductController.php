<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Update;

class ProductController extends Controller
{
    public function index () 
    {   
     $products = Product::all();

     return view('product.index')->with('products',$products);
    }

    public function create()
   {
    return view('product.create');
   }

   public function store(Request $request)
  {
        $product=new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->save();
        $update=new Update;
        $update->user_update = '0';
        $update->user_delete = '0';
        $update->product_create = '1';
        $update->product_update = '0';
        $update->product_delete = '0';
        $update->order_delete = '0';
        $update->contact_update = '0';
        $update->contact_delete = '0';
        $update->contact_create = '0';
        $update->order_create = '0';    
        $update->save();
        return redirect('product');
  }

  public function edit ($id) 
  {
      $product = Product::findOrFail($id);   
      return view('product.edit')->with('product',$product);
  }

  public function update (Request $request, $id) 
  {
      $product = Product::findOrFail($id);
      $product->name = $request->input('name');
      $product->price = $request->input('price');
      $product->description = $request->input('description');
      $request->file('file')->storeAs('public',$request->input('image').'.jpg');
      $image = 'storage/' . $request->input('image').'.jpg';
      $product->image = $image;
      $product->save();
      $update=new Update;
      $update->user_update = '0';
      $update->user_delete = '0';
      $update->product_create = '0';
      $update->product_update = '1';
      $update->product_delete = '0';
      $update->order_delete = '0';
      $update->contact_update = '0';
      $update->contact_delete = '0'; 
      $update->contact_create = '0';
      $update->order_create = '0'; 
      $update->save();
      return redirect('product');
  }

  public function delete ($id)
  {
  $product = Product::findOrFail($id);
  $product->delete(); 
  $update=new Update;
  $update->user_update = '0';
  $update->user_delete = '0';
  $update->product_create = '0';
  $update->product_update = '0';
  $update->product_delete = '1';
  $update->order_delete = '0';
  $update->contact_update = '0';
  $update->contact_delete = '0';
  $update->contact_create = '0';
  $update->order_create = '0';
  $update->save();
  return redirect('product');
  }
}
