<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Update;

class OrderController extends Controller
{
    public function index () 
    {   
     $orders = Order::all();
     return view('order.index')->with('orders',$orders);
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
    $update->save();
    return redirect('order');
    }
}