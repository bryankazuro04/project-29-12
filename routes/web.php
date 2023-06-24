<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdatePasswordController;
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

Route::get('/', function () { return view('home'); });
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/user/setting', [DashboardController::class, 'setting'])->name('user.setting')->middleware('auth');
Route::put('/dashboard/user/setting/{user}', [DashboardController::class, 'update']);
Route::get('/dashboard/user/setting/change-password', [UpdatePasswordController::class, 'edit'])->name('password.edit');
Route::put('/dashboard/user/setting/change-password', [UpdatePasswordController::class, 'update'])->name('password.update');
Route::resource('/dashboard/pegawai', PegawaiController::class)->middleware('auth');