<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_mail($email,$code) {

        Mail::to($email)->send(new SignUp($code));

        return redirect()->route('welcome')->with('alert', 'success%Գաղտնաբառը ուղղսարկվել է Ձեր Էլ. հասցեին');

    }
}
