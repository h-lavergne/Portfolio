<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMessage;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(ContactFormRequest $request)
    {

        $message = Message::create($request->only('name', 'email', 'subject', 'message'));
        Mail::to( 'hugo.lavergne@devinci.fr')->send(new ContactFormMessage($message));
//        flashy()->success('Votre mail a été envoyé avec succès !');
        return redirect()->back();

    }
}
