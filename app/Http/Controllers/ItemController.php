<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Items;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index() {

        $items = Items::all();
        $categories = Categories::all();
        return view('welcome',['items' => $items,'categories' => $categories]);

    }

    public function show($id) {

        $item = Items::find($id);
        return view('item',['item' => $item]);

    }

    public function show_category($id) {

        $items = Items::where('categories_id', $id)->get();
        $categories = Categories::all();
        return view('welcome',['items' => $items,'categories' => $categories]);

    }

    public function buy_item($id) {

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
        $user->save();

        $item = Items::find($id);
        $item->buy_count++;
        $item->save();

        return redirect()->route('home')->with('alert','success%Դուք հաջողությամբ գնեցիք զեղչը');

    }

    public function add_item(Request $request) {

        $item = new Items;

        $item->name = $request->name;
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

        return redirect()->route('home')->with('alert','success%Акция успешно добавлена');

    }

    public function delete_item($id) {

        $item = Items::find($id);
        $item->delete();

        return redirect()->route('home')->with('alert', 'danger%Акция успешно удалена');

    }

}
