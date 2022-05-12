<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contact_us;
use Illuminate\Support\Facades\Redirect;

class ContactUsController extends Controller
{
     public function store(Request $request)
     {
        $validate = $this->validate($request,['name'=>'required|string|max:40',
        'email'=>'required|max:100|email',
        'subject'=>'required|string']);

     $contact = new contact_us;
     $contact->name = $request->input('name');
     $contact->email = $request->input('email');
     $contact->subject = $request->input('subject');
     $contact->message = $request->input('message');
     $contact->save();

     if($validate)
     return Redirect ('contact')->withInput(Input::all());
     }
}
