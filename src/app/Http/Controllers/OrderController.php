<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Update;
use App\Models\Product;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function index () 
    {   
     $orders = Order::all();
     return view('order.index')->with('orders',$orders);
    }

    public function create($id)
    {
     $product = Product::findOrFail($id);
     return view('front.order')->with('product',$product);
    }
 
    public function store(OrderRequest $request,$id)
   {
         $order=new Order;
         $order->product = $id;
         $order->name = $request->input('name');
         $order->name_kana = $request->input('name_kana');
         $order->email = $request->input('email');
         $order->tel = $request->input('tel');
         $order->address = $request->input('address');
         $order->card = $request->input('card');
         $order->save();
         $update=new Update;
         $update->user_update = '0';
         $update->user_delete = '0';
         $update->product_create = '0';
         $update->product_update = '0';
         $update->product_delete = '0';
         $update->order_delete = '0';
         $update->contact_update = '0';
         $update->contact_delete = '0';
         $update->contact_create = '0';
         $update->order_create = '1';    
         $update->save();
         return redirect('front');
   }

    public function show ($id) 
    {   
     $order = Order::findOrFail($id);
     return view('order.show')->with('order',$order);
    }

    public function delete ($id)
    {
    $order = Order::findOrFail($id);
    $order->delete(); 
    $update=new Update;
    $update->user_update = '0';
    $update->user_delete = '0';
    $update->product_create = '0';
    $update->product_update = '0';
    $update->product_delete = '0';
    $update->order_delete = '1';
    $update->contact_update = '0';
    $update->contact_delete = '0';
    $update->contact_create = '0';
    $update->order_create = '0';
    $update->save();
    return redirect('order');
    }
}
