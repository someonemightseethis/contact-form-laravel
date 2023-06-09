<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function send(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect('/database')->with('success', 'Your message has been sent successfully.');
    }
}