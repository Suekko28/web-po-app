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

Route::middleware(['auth'])->prefix('/')->group(function(){
    Route::get('user/service', function () {
        return view('user.service');
    })->name('user.service');

    Route::get('user/about', function () {
        return view('user.about');
    })->name('user.about');

    Route::get('user/contact', function () {
        return view('user.contact');
    })->name('user.contact');
    Route::get('home', function () {
        return view('user.home');
    })->name('user.home');



    Route::resource('pengajuan', PengajuanController::class);
    Route::resource('admin/pengajuan/penawaran', PenawaranController::class);
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
    // Route::resource('/admin/po', POController::class);
});
Route::middleware(['guest'])->group(function(){
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login'])->name('login.post');
    Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
    Route::post('/register',[RegisterController::class,'register'])->name('register.post');


});


// Route::middleware(['admin'])->prefix('/')->group(function(){
//     Route::resource('admin/dashboard', DashboardController::class);

//     Route::resource('admin/pengajuan', PenawaranController::class);

// });


    Route::get('/admin/po', function () {
        return view('admin.po');
    })->name('admin.po');

    Route::get('/admin/pengajuan', function () {
        return view('admin.pengajuan');
    })->name('admin.pengajuan');

    Route::get('/admin/penjadwalan', function () {
        return view('admin.penjadwalan');
    })->name('admin.penjadwalano');

    Route::get('/admin/pengajuan/create', function () {
        return view('admin.form');
    })->name('admin.form');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


Route::get('/about', function () {
    return view('app.about');
})->name('app.about');

Route::get('/contact', function () {
    return view('app.contact');
})->name('app.contact');

Route::get('/', function () {
    return view('app.home');
})->name('app.home');
