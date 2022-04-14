<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class dashboardController extends Controller
{
    public function index ()
    { 
        $updates = Update::all();
        return view('dashboard')->with('updates',$updates);
    }
}
