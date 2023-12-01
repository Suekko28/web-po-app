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


Route::middleware(['guest'])->group(function(){
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login'])->name('login.post');
    Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
    Route::post('/register',[RegisterController::class,'register'])->name('register.post');
    Route::get('/', function () {
        return view('app.home');
    })->name('app.home');
    
});
Route::middleware(['auth'])->prefix('/')->group(function(){
    Route::get('/home', function () {
        return view('user.home-validate');
    })->name('user.home');
    Route::resource('admin/dashboard', DashboardController::class);
    Route::resource('pengajuan', PengajuanController::class);
    Route::resource('admin/pengajuan/penawaran', PenawaranController::class);
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
    // Route::resource('/admin/po', POController::class);
});

Route::middleware(['auth','admin'])->prefix('/')->group(function(){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Route::resource('admin/pengajuan', PenawaranController::class);

});

Route::get('/service', function () {
    return view('app.service');
})->name('service');;

Route::get('/about', function () {
    return view('app.about');
})->name('about');

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/admin/po', function () {
    return view('admin.po');
})->name('admin.po');