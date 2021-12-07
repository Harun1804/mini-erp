<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthContoller::class,'loginPage'])->name('login');
Route::post('/login',[AuthContoller::class,'login'])->name('login.check');
Route::get('/logout', [AuthContoller::class,'logout'])->name('logout');

Route::get('home',[UserController::class,'dashboard'])->name('dashboard');
Route::get('pelanggan',[UserController::class,'pelanggan'])->name('pelanggan');
