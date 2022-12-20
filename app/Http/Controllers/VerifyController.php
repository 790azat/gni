<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyController extends Controller
{
    public function verify($code) {

        if (Auth::user()->email_verified_at == null and Auth::user()->temp_key == $code) {

            $user = User::find(Auth::user()->id);
            $user->email_verified_at = now();
            $user->money = $user->money + 300;
            $user->save();

            return redirect()->route('home')->with('alert','success%Ձեր Էլ. հասցեն հաստատված է +300դրամ');

        }
        else {
            return redirect()->route('welcome')->with('alert','danger%Այս նամակը այլևս գործող չէ');
        }

    }

    public function verify_phone(Request $request) {

        $code = $request->code;

        if (Auth::user()->phone_verified_at == null and Auth::user()->phone_temp_key == $code) {

            $user = Auth::user();
            $user->phone_verified_at = now();
            $user->money = $user->money + 700;
            $user->save();

            return redirect()->route('home')->with('alert','success%Ձեր հեռախոսը հաստատված է +700դրամ');

        }
        else {
            return redirect()->route('welcome')->with('alert','danger%Այս նամակը այլևս գործող չէ');
        }

    }
}
