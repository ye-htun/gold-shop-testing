<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------- ----------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('dashborad');


Route::group(['namespace' => 'App\Http\Controllers'],function(){

       // coustomer
       Route::resource('/customer', CustomerController::class);

       // item
       Route::resource('/item', ItemController::class);
    //    Route::get('/item/info', [ItemController::class, 'getInfo']);
    //    [CustomerController::class, 'getInfo']

       // Customer Order
       Route::resource('/customer_order', CustomerOrderCOntroller::class);

});
