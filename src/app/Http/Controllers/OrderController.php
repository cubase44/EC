<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

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
    return redirect('order');
    }
}
