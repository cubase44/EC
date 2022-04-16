<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Update;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index () 
    {   
        $contacts = Contact::all();   
        return view('contact.index')->with('contacts',$contacts);
    }

    public function create()
    {
     return view('front.contact');
    }

    public function store(ContactRequest $request)
  {
        $contact=new Contact;
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
        $update->contact_update = '0';
        $update->contact_delete = '0';
        $update->contact_create = '1';
        $update->order_create = '0';    
        $update->save();
        return redirect('front');
  }

    public function edit ($id) 
    {
        $contact = Contact::findOrFail($id);   
        return view('contact.edit')->with('contact',$contact);
    }

    public function update (ContactRequest $request, $id) 
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
        $update->contact_update = '0';
        $update->contact_delete = '0';
        $update->contact_create = '1';
        $update->order_create = '0';
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
    $update->contact_create = '0';
    $update->order_create = '0';
    $update->save();
    return redirect('contact');
    }
}
