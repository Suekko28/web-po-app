<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.post');
Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
Route::post('/register',[RegisterController::class,'register'])->name('register.post');
Route::get('/', function () {
    return view('home-validate');
})->name('home');

Route::middleware(['auth'])->prefix('/')->group(function(){
    
    Route::resource('admin/dashboard', DashboardController::class);
    Route::resource('pengajuan', PengajuanController::class);
    Route::resource('admin/pengajuan/penawaran', PenawaranController::class);
    Route::get('logout',[LoginController::class,'logout'])->name('login.logout');
    // Route::resource('/admin/po', POController::class);
});