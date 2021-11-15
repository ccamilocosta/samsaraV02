<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Recipient;

class ContactController extends Controller
{
    public function show()
    {
     return view('contact');
    }
   public function mailContactForm(ContactFormRequest $message, Recipient $recipient)
    {      
     $recipient->notify(new ContactFormMessage($message));
     
     return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');
    }

}
