<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function facebookRedirect() {

        return Socialite::driver('facebook')->redirect();

    }

    public function loginWithFacebook() {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id',$user->id)->first();

            if ($isUser) {

                Auth::login($isUser);
                return redirect('home');
            }
            else {
                $createUser = User::create([
                    'name' => explode(' ',$user->name)[0],
                    'surname' => explode(' ',$user->name)[0],
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'temp_key' => rand(1000,9999),
                    'phone_temp_key' => rand(100000,999999),
                    'password' => encrypt('user'),
                    'email_verified_at' => now(),
                    'money' => 100
                ]);

                Auth::login($createUser);

                return redirect('home');
            }
        }
        catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function googleRedirect() {

        return Socialite::driver('google')->redirect();

    }

    public function loginWithGoogle() {
        try {

            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id',$user->id)->first();

            if ($isUser) {

                Auth::login($isUser);
                return redirect('home');
            }
            else {
                $createUser = User::create([
                    'name' => explode(' ',$user->getName())[0],
                    'surname' => explode(' ',$user->getName())[1],
                    'email' => $user->getEmail(),
                    'avatar' => $user->getAvatar(),
                    'google_id' => $user->getId(),
                    'temp_key' => rand(1000,9999),
                    'phone_temp_key' => rand(100000,999999),
                    'password' => encrypt('user'),
                    'email_verified_at' => now(),
                    'money' => 100
                ]);

                Auth::login($createUser);

                return redirect('home');
            }
        }
        catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
