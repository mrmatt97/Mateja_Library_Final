<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| API Routes
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
