<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InitController;
use App\Http\Controllers\PastPaperController;
use App\Http\Controllers\StudyMaterialController;
use App\Http\Controllers\StudyNoteController;
use App\Http\Controllers\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->group( function () {
    Route::get('/test',[AuthController::class,'test']);


});

