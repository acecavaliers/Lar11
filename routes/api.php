<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
//     Route::group(['prefix'=>'V1'],function(){
//         Route::apiResource('customers',CustomersController::class);
//     });

// })->middleware('auth:sanctum');

Route::group(['prefix'=>'V1'],function(){
    Route::apiResource('customers',CustomersController::class);
});
