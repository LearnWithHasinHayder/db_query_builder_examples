<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/query",[QueryController::class,'index']);
Route::get("/newauthor",[QueryController::class,'store']);
