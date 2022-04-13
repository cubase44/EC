<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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
        return redirect('contact');
    }

    public function delete ($id)
    {
    $contact = Contact::findOrFail($id);
    $contact->delete(); 
    return redirect('contact');
    }
}
