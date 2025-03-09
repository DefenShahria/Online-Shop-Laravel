<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () { return view('welcome');});
Route::get('/Home', function () { return "Home";});
Route::get('/Admin', function () { return view('admin');});
Route::post('/store',[PostController::class,'datastore'])->name('store');

