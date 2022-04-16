<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Update;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index () 
    {
        $users = User::all();   
        return view('user.index')->with('users',$users);
    }

    public function edit ($id) 
    {
        $user = User::findOrFail($id);   
        return view('user.edit')->with('user',$user);
    }

    public function update (UserRequest $request, $id) 
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        $update=new Update;
        $update->user_update = '1';
        $update->user_delete = '0';
        $update->product_create = '0';
        $update->product_update = '0';
        $update->product_delete = '0';
        $update->order_delete = '0';
        $update->contact_update = '0';
        $update->contact_delete = '0';
        $update->contact_create = '0';
        $update->order_create = '0';
        $update->save();
        return redirect('user');
    }

    public function delete ($id)
    {
    $user = User::findOrFail($id);
    $user->delete();
    $update=new Update;
    $update->user_update = '0';
    $update->user_delete = '1';
    $update->product_create = '0';
    $update->product_update = '0';
    $update->product_delete = '0';
    $update->order_delete = '0';
    $update->contact_update = '0';
    $update->contact_delete = '0';
    $update->contact_create = '0';
    $update->order_create = '0';
    $update->save();
    return redirect('user');
    }
}
