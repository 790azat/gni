<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoBipController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\VerifyController;
use App\Mail\SignUp;
use App\Models\Categories;
use App\Models\User;
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

Route::get('/', [ItemController::class,'index'])->name('welcome');
Route::get('/item/{id}', [ItemController::class,'show']);
Route::get('/category/{id}', [ItemController::class,'show_category']);
Route::get('/buy-item/{id}', [ItemController::class, 'buy_item']);

Route::view('/add-item', 'admin.add-item' , ['categories' => Categories::all()])->name('add-item');
Route::post('/add-item',[ItemController::class,'add_item']);
Route::get('/delete-item/{id}',[ItemController::class,'delete_item']);


Route::get('/categories', [CategoriesController::class,'index'])->name('categories');
Route::post('/add-category', [CategoriesController::class,'add_category']);
Route::get('/delete-category/{id}',[CategoriesController::class, 'delete_category']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/my-coupons', [HomeController::class, 'my_coupons'])->name('my-coupons');
Route::get('/my-bonuses', [HomeController::class, 'my_bonuses'])->name('my-bonuses');
Route::get('/my-wallet', [HomeController::class, 'my_wallet'])->name('my-wallet');
Route::get('/my-data', [HomeController::class, 'my_data'])->name('my-data');
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

Route::get('/auth/facebook', [SocialController::class,'facebookRedirect'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [SocialController::class,'loginWithFacebook']);

Route::get('/auth/google', [SocialController::class,'googleRedirect'])->name('auth.google');
Route::get('/auth/google/callback', [SocialController::class,'loginWithGoogle']);

Route::post('/send',[InfoBipController::class,'index']);

Route::get('/locale/{lang}', [LanguageController::class, 'set_lang']);

Route::get('/test', function () {

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://xr83y3.api.infobip.com/sms/2/text/advanced',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{"messages":[{"destinations":[{"to":"37493401179"}],"from":"Gni.am","text":"G7"}]}',
        CURLOPT_HTTPHEADER => array(
            'Authorization: App 3ade22baab3e350e81ca9c2ca611f5a1-9d386cb0-4349-4867-ae74-dbb32ea62378',
            'Content-Type: application/json',
            'Accept: application/json'
        ),
    ));

    curl_close($curl);

});

