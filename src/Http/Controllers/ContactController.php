<?php

namespace Cento\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Cento\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Cento\Contact\Mail\ContactMailable;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contcat'));
    }
}
