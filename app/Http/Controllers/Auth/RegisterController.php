<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\InfoBipController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReferralController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        if (isset($data['is_admin'])) {
            return User::create([
                'name' => $data['name'],
                'aah' => $data['aah'],
                'is_admin' => $data['is_admin'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
            ]);
        }
        else {

            $code = rand(1000,9999);
            $phone_code = rand(100000,999999);
            $email = $data['email'];

            (new \App\Http\Controllers\MailController)->send_mail($email,$code);
            (new \App\Http\Controllers\InfoBipController)->send($data['phone'],$phone_code);

            if (isset($data['referrer'])) {
                $referrer_id = User::where('referral_link',$data['referrer'])->first()->id;
            }
            else {
                $referrer_id = null;
            }

            return User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'money' => 100,
                'password' => Hash::make($data['password']),
                'temp_key' => $code,
                'phone_temp_key' => $phone_code,
                'referral_link' => (new ReferralController)->generate_link(),
                'referrer_id' => $referrer_id
            ]);

        }
    }
}
