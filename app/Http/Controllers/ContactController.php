<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    
    public function show()
    {
        return view('contact');
    }
    
    public function store()
    {
        request()->validate(['email' => 'required|email']);
        
        Mail::to(request('email'))
            ->send(new Contact());

        return redirect('/contact')
            ->with('message', 'Email Sent!');
    }

}
