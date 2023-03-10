<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Items;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index() {

        $items = Items::where('status',1)->paginate(12);
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

    public function add_item(Request $request) {

        $item = new Items;

        $item->name = $request->name;
        $item->owner_id = Auth::user()->id;
        $item->status = 0;
        $item->categories_id = $request->category;
        $item->text = $request->text;
        $item->info = $request->info;
        $item->start_time = $request->start_time;
        $item->end_time = $request->end_time;
        $item->old_price = $request->old_price;
        $item->new_price = $request->new_price;

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

        return back()->with('alert','primary%Ակցիան հաջողութթյամբ հաստատված է');

    }

    public function disable_item($id) {

        $item = Items::find($id);
        $item->status = 0;
        $item->save();

        return back()->with('alert','warning%Ակցիան հաջողութթյամբ անջատված է');

    }

    public function update_item(Request $request) {

        $item = Items::find($request->id);

        if ($item->status == 1) {
            $item->status = 0;
        }

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

        return redirect()->route('home')->with('alert','success%Ակցիան հաջողութթյամբ փոփոխված է, սպասեք մոդերացիային');

    }

    public function delete_item($id) {

        $item = Items::find($id);

        if (count($item->coupons) == 0) {

            if (Auth::user()->id == $item->owner or Auth::user()->is_super_admin == 1) {
                $item->delete();
            }
            else {
                return back();
            }

            return back()->with('alert', 'danger%Ակցիան հաջողութթյամբ հեռացված է');

        }

        else {
            return back()->with('alert', 'danger%Ակցիան ունի գնորդներ');
        }

    }

}
