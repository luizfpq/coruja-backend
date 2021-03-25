<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("check", function(){
    $check = [
        [
            "hard_key"=>"79e877b0cc34729bae2b867d5f479ce0",
            "ip"=>"138.186.39.191",
            "datetime"=>"24/03/2021 23:27:20"
        ]
    ];

    return $check;

});
