<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw("{$data['message']}", function($message)  {
            $message->to("ayoubamazu@gmail.com")->subject("Nouveau message de contact");
        });

        return redirect('/')->with('success', 'Votre message a bien été envoyé.');
    }
}
