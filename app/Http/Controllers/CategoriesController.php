<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {

        $categories = Categories::all();
        return view('superadmin.super-categories', ['categories' => $categories]);

    }

    public function add_category(Request $request) {

        $category = new Categories;

        $category->name = $request->name;
        $category_name = $request->name;
        $category->created_at = now();

        $category->save();

        return redirect()->route('categories')->with('alert','success%Կատեգորիան հաջողությաբ ավելացված է');

    }

    public function delete_category($id) {

        $category = Categories::find($id);
        $category_name = $category->name;
        $category->delete();

        return redirect()->route('categories')->with('alert','danger%Կատեգորիան հաջողությամբ հեռացված է');
    }
}
