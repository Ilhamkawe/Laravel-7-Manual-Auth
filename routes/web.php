<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return redirect()->route('login');
});

Route::get('/res', function () {
    return dd(Auth::user());
});

Route::get('/login',[AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/log',[AuthController::class, 'postLogin'])->middleware('guest')->name('log');

Route::get('/register',[AuthController::class, 'getRegister'])->middleware('guest')->name('register');
Route::post('/regis',[AuthController::class, 'postRegister'])->middleware('guest')->name('regis');

Route::get('/home',[AuthController::class, 'index'])->middleware('auth')->name('home');
Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth')->name('logout');