<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/signin', [AuthController::class, 'login'])
  ->middleware('guest')
  ->name('signin');
Route::get('/signup', [AuthController::class, 'registrasi'])
  ->middleware('guest')
  ->name('signup');