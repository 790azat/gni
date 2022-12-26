<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Items;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $items = Items::with('owner')->where('owner_id',Auth::user()->id)->get();
            $categories = Categories::all();
            return view('admin.admin',['items' => $items,'categories' => $categories]);
        }
        elseif (Auth::user()->is_super_admin == 1) {
            $items = Items::with('owner')->get();
            $categories = Categories::all();
            return view('superadmin.super-admin',['items' => $items,'categories' => $categories]);
        }
        else {
            $user = Auth::user();
            return view('user.home', ['user' => $user]);
        }
    }

    public function my_coupons() {
        $user = Auth::user();
        $coupons = Coupons::where('owner_id',$user->id)->get();
        return view('user.my-coupons', ['user' => $user,'coupons' => $coupons]);
    }

    public function my_bonuses() {
        $user = Auth::user();
        return view('user.my-bonuses', ['user' => $user]);
    }

    public function my_wallet() {
        $user = Auth::user();
        $transactions = Auth::user()->transactions;
        return view('user.my-wallet', ['user' => $user,'transactions' => $transactions]);
    }

    public function my_data() {
        $user = Auth::user();
        return view('user.my-data', ['user' => $user]);
    }

    public function update_my_data(Request $request) {
        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return back()->with('alert','success%Ձեր տվյալները հաջողությամբ փոխվել են');
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

    public function update_admin_data(Request $request) {

        $admin = User::find(Auth::user()->id);
        $admin->name = $request->name;
        $admin->aah = $request->aah;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->save();

        return redirect()->route('admin-data')->with('alert','success%Ձեր տվյալները թարմեցվել են');


    }

    public function update_admin_password(Request $request) {

        $admin = User::find(Auth::user()->id);

        $hasher = app('hash');

        if ($hasher->check($request->old_password, $admin->password)) {

            if ($request->new_password == $request->confirm_password) {

                $admin->password = Hash::make($request->new_password);
                $admin->save();

                return redirect()->route('admin-password')->with('alert','success%Ձեր գաղտնաբառը փոխվել է');

            }

            else {
                return redirect()->route('admin-password')->with('alert','warning%Գաղտնաբառերը չեն համնկնում');
            }

        }
        else {
            return redirect()->route('admin-password')->with('alert','danger%Հին գաղտնաբառը սխալ է');
        }




    }
}
