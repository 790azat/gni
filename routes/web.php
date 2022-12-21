<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoBipController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\VerifyController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSuperAdmin;
use App\Http\Middleware\NotAdmin;
use App\Mail\SignUp;
use App\Models\Categories;
use App\Models\Items;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ItemController::class,'index'])->name('welcome');
Route::get('/item/{id}', [ItemController::class,'show']);
Route::get('/category/{id}', [ItemController::class,'show_category']);
Route::get('/buy-item/{id}', [ItemController::class, 'buy_item'])->middleware('auth');

Route::get('/locale/{lang}', [LanguageController::class, 'set_lang']);

//  User admin

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');


Route::middleware([Authenticate::class, NotAdmin::class])->group(function () {

    Route::get('/my-coupons', [HomeController::class, 'my_coupons'])->name('my-coupons');
    Route::get('/my-bonuses', [HomeController::class, 'my_bonuses'])->name('my-bonuses');
    Route::get('/my-wallet', [HomeController::class, 'my_wallet'])->name('my-wallet');
    Route::get('/my-data', [HomeController::class, 'my_data'])->name('my-data');
    Route::post('/update-my-data', [HomeController::class, 'update_my_data']);
    Route::get('/my-password', [HomeController::class, 'my_password'])->name('my-password');
    Route::post('/update-my-avatar', [HomeController::class, 'update_my_avatar']);
    Route::get('/resend/{user_id}/{email}', function ($user_id,$email) {

        $user = User::find($user_id);
        $code = $user->temp_key;

        Mail::to($email)->send(new SignUp($code));

        return redirect()->route('home')->with('alert', 'success%Գաղտնաբառը ուղղսարկվել է Ձեր Էլ. հասցեին');
    });
    Route::get('/verify_email/{code}', [VerifyController::class, 'verify']);
    Route::post('/verify_phone', [VerifyController::class, 'verify_phone']);
    Route::post('/send',[InfoBipController::class,'index']);

});

//  Company admin

Route::middleware([IsAdmin::class])->group(function () {
    Route::view('/add-item', 'admin.add-item' , ['categories' => Categories::all()])->name('add-item');
    Route::post('/add-item',[ItemController::class,'add_item']);
    Route::post('/update-item',[ItemController::class,'update_item']);
    Route::get('/delete-item/{id}',[ItemController::class,'delete_item']);
    Route::view('/admin-data','admin.admin-data')->name('admin-data');
    Route::post('/update-admin-data',[ItemController::class,'update_admin_data']);
    Route::view('/admin-password','admin.admin-password')->name('admin-password');
    Route::post('/update-admin-password',[ItemController::class,'update_admin_password']);


});

//  Super admin

Route::middleware([IsSuperAdmin::class])->group(function () {

    Route::view('/super-add-item', 'superadmin.super-add-item' , ['categories' => Categories::all()])->name('super-add-item');
    Route::post('/add-item',[ItemController::class,'add_item']);
    Route::get('/accept-item/{id}',[ItemController::class,'accept_item']);
    Route::get('/disable-item/{id}',[ItemController::class,'disable_item']);
    Route::post('/update-item',[ItemController::class,'update_item']);
    Route::get('/delete-item/{id}',[ItemController::class,'delete_item']);
    Route::view('/categories', 'superadmin.super-categories',['categories' => Categories::all()])->name('super-categories');
    Route::post('/add-category', [CategoriesController::class,'add_category']);
    Route::get('/delete-category/{id}',[CategoriesController::class, 'delete_category']);

});

//  Social auth

Route::get('/auth/facebook', [SocialController::class,'facebookRedirect'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [SocialController::class,'loginWithFacebook']);

Route::get('/auth/google', [SocialController::class,'googleRedirect'])->name('auth.google');
Route::get('/auth/google/callback', [SocialController::class,'loginWithGoogle']);

Route::get('/c/{command}', function ($command) {
    Artisan::call($command, ['--force' => true]);
});
Route::get('/reset', function () {

    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('db:wipe', ['--force' => true]);
    Artisan::call('migrate:fresh', ['--force' => true]);
    Artisan::call('db:seed', ['--force' => true]);

    return redirect()->route('welcome')->with('alert','success%Reset was complete successfully');
});

Route::view('/company-register', 'auth.company-register')->name('company-register');

Auth::routes();

