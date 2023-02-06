<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAppController;

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
Route::get('/getWelcome',[PhoneAppController::class,"getwelcome"]);

Route::get('/getPhonedata',[PhoneAppController::class,"GetPhoneData"])->name("getPhonedata");

Route::get('/checkout/{id}',[PhoneAppController::class,"GetPhoneDataid"])->name("getPhonedataid");

Route::Post('/getinvoic',[PhoneAppController::class,"Getinvoic"])->name("getinvoic");
//Route::Post('/getin',[PhoneAppController::class,"Getinvoic"])->name("invoic")
Route::get('/invoice', function () {
    return view('invoic');
})->name("invoice");

Route::get('/checkout', function () {
    return view('checkOut');
})->name("checkout");

Route::get('/', function () {
    $phone=[
        ['Type'=>'Iphone 14','Price'=>'3500','Color'=>'Black'],
        ['Type'=>'Sumsung','Price'=>'2500','Color'=>'White'],
        ['Type'=>'Huwaui','Price'=>'1000','Color'=>'Gold']
    ];
    
    
    return view('welcome',["phone"=>$phone]);
})->name("Home");

Route::get('/sa', function () {
    $w="omaimah";
    return view('Sa', ["s"=>$w]);
})->name("sa");


// Route::get('/test', function () {
//     return "test" ;
// });

// Route::get('/phone', function () {
//     return view('phone');
// });
// Route::get('/phonedisplay ', function () {
//     $phone=[
//         ['Type'=>'Iphone ','Price'=>'3500','Color'=>'red'],
//         ['Type'=>'Sumsung','Price'=>'2500','Color'=>'White'],
//         ['Type'=>'Huwaui ','Price'=>'1000','Color'=>'pink']
//     ];
    
//     return view('phonedetails',["phone"=>$phone]);
// });
// Route::get('/oldphone ', function () {
//     return view('old/oldphone');
// });

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/