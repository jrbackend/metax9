<?php

use App\Http\Controllers\ShowHomeController;
use App\Http\Middleware\FacebookCloaker;
use App\Http\Middleware\GoogleCloaker;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHomeController::class)
    ->middleware([FacebookCloaker::class, GoogleCloaker::class])
    ->name('home.show');

Route::get('/x9', function () {
   return view('welcome');
})->name('x9');
