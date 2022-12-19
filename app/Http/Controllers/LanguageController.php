<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function set_lang($lang) {
        App::setLocale($lang);
        Session::put('locale',$lang);
        return redirect()->back();
    }
}
