<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function creat(){
        return view("home");
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw("u have a message from {$data['name']} , email : {$data['name']} .{$data['message']} ", function($message)  {
            $message->to("ayoubamazu@gmail.com")->subject("Nouveau message de contact");
        });

        return redirect('/')->with('success', 'Votre message a bien été envoyé.');
    }
}
