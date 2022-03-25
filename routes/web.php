<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

if (Auth::user()) {
    if (Auth::user()->type == 'Admin') {
        redirect()->route('home');
    }
}

Route::get('/', function () {
    return view('website.index');
});
Route::get('/catering', function () {
    return view('website.catering');
});
Route::get('getProduct/{id}',[App\Http\Controllers\HomeController::class,'getProduct'])->name('getProduct');
Route::get('getItem/{id}',[App\Http\Controllers\HomeController::class,'getItem'])->name('getItem');
Route::get('getItemDetail/{id}',[App\Http\Controllers\HomeController::class,'getItemDetail'])->name('getItemDetail');
Route::post('purchase',[App\Http\Controllers\HomeController::class,'purcahse'])->name('purchase');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category',\App\Http\Controllers\CategoryController::class);
    Route::resource('/product',\App\Http\Controllers\ProductController::class);
    Route::resource('/item',\App\Http\Controllers\ItemController::class);
});


Auth::routes();
