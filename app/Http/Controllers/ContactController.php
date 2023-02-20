<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function view_contact()
    {
        return view('contact_us');
    }

    public function contact_form(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        $contact->save();
        return back()->with(['status' => 'Thanks for contacting us']);
    }

    public function subscribe_form(Request $request)
    {
        $request->validate(['email' => 'required']);

        $subscribe = Subscribe::create([
            'email' => $request->email
        ]);
        $subscribe->save();
        return back()->with(['status' => 'Thanks for subscribing']);
    }
}
