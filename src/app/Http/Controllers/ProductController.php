<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
      return redirect('product');
  }

  public function delete ($id)
  {
  $product = Product::findOrFail($id);
  $product->delete(); 
  return redirect('product');
  }
}
