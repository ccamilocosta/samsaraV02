<?php

namespace App\Http\Controllers;
use App\Notifications\ContactFormMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Recipient;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    $to_name = ‘RECEIVER_NAME’;
    $to_email = ‘RECEIVER_EMAIL_ADDRESS’;
    $data = array(‘name’=>”(sender_name)”, “body” => “”);
    Mail::send(‘emails.mail’, $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject(Laravel Test Mail’);
    $message->from(‘SENDER_EMAIL_ADDRESS’,’Test Mail’);
});  

}
