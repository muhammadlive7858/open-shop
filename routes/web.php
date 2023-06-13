<?php

use App\MOdels\Bolim;
use App\MOdels\Tavar;


use App\Http\Controllers\AksiyaController;
use App\Http\Controllers\BolimController;
use App\Http\Controllers\ChegirmaController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\SavdoController;
use App\Http\Controllers\SotuvTarixi;

use App\Http\Controllers\ShopClientController;
use App\Http\Controllers\TaminotchiController;
use App\Http\Controllers\TavarController;
use App\Http\Controllers\TolavlarController;
use App\Http\Controllers\XizmatController;
use App\Http\Controllers\profile;

use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    $parentBolimlar = Bolim::where('parent_id','=',null)->get();
    $Bolimlar = Bolim::get();
    $tavarlar = Tavar::all();
    $now = date('Y-m-d');
    // dd($tavarlar);

    return view('frontend.index',compact('parentBolimlar','Bolimlar','tavarlar','now'));
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('tavar', TavarController::class)->names('tavar');

Route::resource('bolim', BolimController::class)->names('bolim');

Route::resource('taminot', TaminotchiController::class)->names('taminot');

Route::resource('aksiya', AksiyaController::class)->names('aksiya');

Route::resource('chegirma', ChegirmaController::class)->names('chegirma');

Route::resource('xizmat', XizmatController::class)->names('xizmat');

Route::resource('tolav', TolavlarController::class)->names('tolav');



// profile
Route::get('profile', [profile::class, 'index'])->name('profile');
Route::post('profile/update/{id}', [profile::class, 'update'])->name('profile.update');
Route::post('profile/updatepassword/{id}', [profile::class, 'changePassword'])->name('profile.updatepassword');


// HelperRoute
Route::get('kirim/{id}',[HelperController::class,'kirim'])->name('kirim');
Route::post('kirim/{id}',[HelperController::class,'kirim_update'])->name('kirim');


// savdo paneli
Route::get('savdo',[SavdoController::class,'index'])->name('savdo');
Route::post('search',[SavdoController::class,'search'])->name('searchShop');

Route::post('karzinkaplus',[SavdoController::class,'karzinkaplus'])->name('karzinkaplus');

Route::get('karzinka', [SavdoController::class, 'karzinka'])->name('karzinka');

Route::post('sell', [SavdoController::class, 'sell'])->name('sell');

Route::get('cart/remove/{id}',[SavdoController::class, 'remove'])->name('cart.remove');

Route::get('cart/destroy',[SavdoController::class, 'destroy'])->name('cart.destroy');


// sotuv tarixi
Route::get('savdo/history',[SotuvTarixi::class, 'index'])->name('savdo.history');

Route::get('sotuv/show/{id}',[SotuvTarixi::class, 'show'])->name('sotuv.show');

Route::get('sotuv_client/show/{id}',[SotuvTarixi::class, 'sotuv_client'])->name('sotuv_client.show');


// mijozlar
Route::resource('mijoz', ShopClientController::class)->names('mijoz');







