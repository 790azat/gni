<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Items;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index() {

        $items = Items::where('status',1)->get();
        $categories = Categories::all();
        return view('welcome',['items' => $items,'categories' => $categories]);

    }

    public function show($id) {

        if (Items::find($id) !== null and Items::find($id)->status == 1) {
            $item = Items::find($id);
            return view('item',['item' => $item]);
        }
        else {
            return back()->with('alert','danger%Այդպիսի ակցիա գոյություն չունի');
        }

    }

    public function show_category($id) {

        $items = Items::where('categories_id', $id)->where('status',1)->get();
        $categories = Categories::all();
        return view('welcome',['items' => $items,'categories' => $categories]);

    }

    public function buy_item($id) {

        if (Items::find($id) !== null and Items::find($id)->status == 1) {
            $old_coupons = Auth::user()->coupons;

            if ($old_coupons == null) {
                $array = [];
            }
            else {
                $array = json_decode($old_coupons);
            }

            if (in_array($id,$array)) {
                return redirect()->back()->with('alert','warning%Դուք արդեն ունեք այս զեղչը.');
            }
            else

                array_push($array,$id);
            $array = json_encode($array);

            $user = User::find(Auth::user()->id);
            $user->coupons = $array;
            $user->money = $user->money - 300;
            $user->save();

            $item = Items::find($id);
            $item->buy_count++;
            $item->save();

            return redirect()->route('my-coupons')->with('alert','success%Դուք հաջողությամբ գնեցիք զեղչը');
        }
        else {
            return back()->with('alert','danger%Այդպիսի ակցիա գոյություն չունի');
        }

    }

    public function add_item(Request $request) {

        $item = new Items;

        $item->name = $request->name;
        $item->owner = Auth::user()->id;
        $item->status = 0;
        $item->categories_id = $request->category;
        $item->text = $request->text;
        $item->info = $request->info;
        $item->start_time = $request->start_time;
        $item->end_time = $request->end_time;
        $item->old_price = $request->old_price;
        $item->new_price = $request->new_price;
        $item->buy_count = 0;

        $item->main_image = time() . '-' . $request->main_image->getClientOriginalName();
        $request->file('main_image')->storeAs('images',time() . '-' . $request->main_image->getClientOriginalName(),'public');

        if ($request->hasFile('images')) {
            $array = [];
            foreach ($request->file('images') as $image) {
                $name = time() . '-' . $image->getClientOriginalName();
                $image->storeAs('images',$name,'public');
                array_push($array,$name);
            }
            $array = json_encode($array);
        }
        $item->images = $array;

        $item->save();

        return redirect()->route('home')->with('alert','success%Ակցիան հաջողութթյամբ ավելացված է');

    }

    public function accept_item(Request $request) {

        $item = Items::find($request->id);
        $item->status = 1;
        $item->save();

        return redirect()->route('home')->with('alert','primary%Ակցիան հաջողութթյամբ հաստատված է');

    }

    public function disable_item(Request $request) {

        $item = Items::find($request->id);
        $item->status = 0;
        $item->save();

        return redirect()->route('home')->with('alert','warning%Ակցիան հաջողութթյամբ անջատված է');

    }

    public function update_item(Request $request) {

        $item = Items::find($request->id);

        $item->name = $request->name;
        $item->categories_id = $request->category;
        $item->text = $request->text;
        $item->info = $request->info;
        $item->start_time = $request->start_time;
        $item->end_time = $request->end_time;
        $item->old_price = $request->old_price;
        $item->new_price = $request->new_price;

        if ($request->hasFile('main_image')) {
            $item->main_image = time() . '-' . $request->main_image->getClientOriginalName();
            $request->file('main_image')->storeAs('images',time() . '-' . $request->main_image->getClientOriginalName(),'public');
        }

        if ($request->hasFile('images')) {
            if ($request->hasFile('images')) {
                $array = [];
                foreach ($request->file('images') as $image) {
                    $name = time() . '-' . $image->getClientOriginalName();
                    $image->storeAs('images',$name,'public');
                    array_push($array,$name);
                }
                $array = json_encode($array);
            }
            $item->images = $array;
        }

        $item->save();

        return redirect()->route('home')->with('alert','success%Ակցիան հաջողութթյամբ փոփոխված է');

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

    public function delete_item($id) {

        $item = Items::find($id);

        if (Auth::user()->id == Items::find($id)->owner) {
            $item->delete();
        }
        else {
            return back();
        }

        return redirect()->route('home')->with('alert', 'danger%Ակցիան հաջողութթյամբ հեռացված է');

    }

}
