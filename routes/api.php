<?php

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/users',function(Request $request){
    return response()->json([
        "data"=> "Hello World",
        "status"=> 200
    ]);
});
