<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->is_admin == 1) {
            $items = Items::with('category')->get();
            return view('admin.admin',['items' => $items]);
        }
        else {
            $user = Auth::user();
            return view('user.home', ['user' => $user]);
        }
    }

    public function my_coupons() {
        $user = Auth::user();
        $coupons = Items::whereIn('id',json_decode($user->coupons))->get();
        return view('user.my-coupons', ['user' => $user,'coupons' => $coupons]);
    }

    public function my_bonuses() {
        $user = Auth::user();
        $bonuses = $user->bonuses;
        return view('user.my-bonuses', ['user' => $user,'bonuses' => $bonuses]);
    }

    public function my_wallet() {
        $user = Auth::user();
        return view('user.my-wallet', ['user' => $user]);
    }

    public function my_data() {
        $user = Auth::user();
        return view('user.my-data', ['user' => $user]);
    }

    public function my_password() {
        $user = Auth::user();
        return view('user.my-password', ['user' => $user]);
    }

    public function update_my_avatar(Request $request) {

        if ($request->hasFile('avatar')) {
            $avatar_name = 'custom-' . time() . '-' . $request->file('avatar')->getClientOriginalName();

            $user = Auth::user();
            $user->avatar = $avatar_name;
            $user->save();

            $request->file('avatar')->storeAs('avatars',$avatar_name,'public');
        }

        return redirect()->route('home')->with('alert','success%Ձեր նկարը հաջողությամբ փոխվել է');

    }
}
