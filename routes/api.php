<?php

use App\Http\Controllers\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(ApiAuthController::class)->group(function(){
    Route::post("register",'register');
    Route::post("login",'login');
    // Route::post("logout",'logout');
   Route::post('logout', 'logout')->middleware('auth:sanctum'); 


});

