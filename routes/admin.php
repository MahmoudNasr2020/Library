<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('dashboard.index');
});

Route::get('home',[HomeController::class,'index']);

Route::resource('category', CategoryController::class);
