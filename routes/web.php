<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('articles', HomeController::class);
Route::get('/', [HomeController::class, 'index']);
