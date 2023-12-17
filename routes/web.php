<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\PenawaranUserController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PengajuanUserController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\PeralatanController;
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

Route::get('/dokumen/surat-pengajuan', [DocumentController::class, 'generatePengajuan']);
Route::get('/dokumen/surat-penawaran', [DocumentController::class, 'generatePenawaran']);
Route::get('/dokumen/surat-po', [DocumentController::class, 'generatePo']);

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

    Route::get('/penawaran/index', [PenawaranUserController::class, 'index'])->name('user-penawaran.index');
    Route::get('/po/index', [PenawaranUserController::class, 'po'])->name('user-po.index');
    Route::get('/approval-penawaran', [PenawaranUserController::class, 'approvalPenawaran']);
    Route::get('/approval-po', [DashboardController::class, 'approvalPo']);
    Route::resource('user-pengajuan', PengajuanUserController::class);
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
    // Route::resource('/admin/po', POController::class);
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[LoginController::class,'login'])->name('login.post');
    Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
    Route::post('/register',[RegisterController::class,'register'])->name('register.post');


});


Route::middleware(['admin'])->prefix('/')->group(function(){
    Route::get('/admin-po/generate-po', [DashboardController::class, 'generatePo']);
    Route::get('admin', [DashboardController::class,'dashboard'])->name('admin');
    Route::resource('admin-peralatan',PeralatanController::class);
    Route::resource('admin-pengajuan',PengajuanController::class);
    Route::resource('admin-po', DashboardController::class);
    Route::resource('admin-penjadwalan', PenjadwalanController::class);

});




Route::get('/about', function () {
    return view('app.about');
})->name('app.about');

Route::get('/contact', function () {
    return view('app.contact');
})->name('app.contact');

Route::get('/service', function () {
    return view('app.service');
})->name('app.service');

Route::get('/', function () {
    return view('app.home');
})->name('app.home');
