<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\PengajuanController;
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

Route::get('/', function () {
    return view('home-validate');
});


Route::resource('/admin/dashboard', DashboardController::class);
Route::resource('/admin/pengajuan', PenawaranController::class);
Route::resource('/admin/pengajuan/penawaran', PenawaranController::class);
// Route::resource('/admin/po', POController::class);

Route::resource('/homevalidate/pengajuan', PengajuanController::class);
Route::resource('/homevalidate/pengajuan/form', PengajuanController::class);