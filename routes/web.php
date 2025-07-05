<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});
Route::get('/login', [AuthController::class, 'signin'])
  ->middleware('guest')
  ->name('login');
Route::get('/dashboard', function () {
  return view('User.Dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/signup', [AuthController::class, 'registrasi'])
  ->middleware('guest')
  ->name('signup');
Route::post('/signup/user', [AuthController::class, 'store']);
Route::post('/login/user', [AuthController::class, 'verify']);