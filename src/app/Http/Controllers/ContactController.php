<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Update;

class ContactController extends Controller
{
    public function index () 
    {   
        $contacts = Contact::all();   
        return view('contact.index')->with('contacts',$contacts);
    }

    public function edit ($id) 
    {
        $contact = Contact::findOrFail($id);   
        return view('contact.edit')->with('contact',$contact);
    }

    public function update (Request $request, $id) 
    {
        $contact = Contact::findOrFail($id);
        $contact->name = $request->input('name');
        $contact->name_kana = $request->input('name_kana');
        $contact->contents = $request->input('contents');
        $contact->save();
        $update=new Update;
        $update->user_update = '0';
        $update->user_delete = '0';
        $update->product_create = '0';
        $update->product_update = '0';
        $update->product_delete = '0';
        $update->order_delete = '0';
        $update->contact_update = '1';
        $update->contact_delete = '0';
        $update->save();
        return redirect('contact');
    }

    public function delete ($id)
    {
    $contact = Contact::findOrFail($id);
    $contact->delete(); 
    $update=new Update;
    $update->user_update = '0';
    $update->user_delete = '0';
    $update->product_create = '0';
    $update->product_update = '0';
    $update->product_delete = '0';
    $update->order_delete = '0';
    $update->contact_update = '0';
    $update->contact_delete = '1';
    $update->save();
    return redirect('contact');
    }
}
