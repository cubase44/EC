<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index () 
    {
        $users = User::all();   
        return view('user.index')->with('users',$users);
    }

    public function edit ($id) 
    {
        $user = user::findOrFail($id);   
        return view('user.edit')->with('user',$user);
    }

    public function update (Request $request, $id) 
    {
        $user = user::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return redirect('user');
    }

    public function delete ($id)
    {
    $user = user::findOrFail($id);
    $user->delete(); 
    return redirect('user');
    }
}
