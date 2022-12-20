<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SmsController extends Controller
{
    public function send(Request $request) {

        $user = Auth::user();
        $user->phone = $request->phone;
        $user->save();

        $number = '3740' . $user->phone;
        $code = $user->phone_temp_key;

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://telesign-telesign-send-sms-verification-code-v1.p.rapidapi.com/sms-verification-code?phoneNumber=%2B'. $number .'&verifyCode='. $code .'&appName=Gni.am',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: telesign-telesign-send-sms-verification-code-v1.p.rapidapi.com",
                "X-RapidAPI-Key: 965d2f057emshd75950f33f395f7p1b4fa8jsnf983ae651f7c"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return redirect()->route('home')->with('alert','danger%' . $err);
        } else {
            return redirect()->route('home')->with('alert','success%Կոդով նամակը ուղղարկվել է Ձեր համարին' . $response);
        }
    }
}
