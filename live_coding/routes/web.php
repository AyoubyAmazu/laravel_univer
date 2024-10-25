<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/contact",[ContactController::class,"creat"]);
Route::post("/contact",[ContactController::class,"store"]);