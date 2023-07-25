<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


////////////// login logout - start /////////////
Route::controller(AuthController::class)->group(function() {
  Route::get('/', 'login')->name('login.form');
  Route::post('/login-auth', 'loginAuth')->name('login.auth');
  Route::get('/logout', 'logout')->name('logout');
});
////////////// login logout - end //////////////


//////////// auth middleware - start ////////////
Route::middleware('custom_auth')->group(function() {
  Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});
//////////// auth middleware - end ////////////
