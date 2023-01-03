<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [StokController::class, 'tampilan_login']);

Route::post('/proses-login', [StokController::class, 'proses_login']);

Route::get('/dashboard-admin', [StokController::class, 'dashboard_admin']);

Route::get('/dashboard-pimpinan', [StokController::class, 'dashboard_pimpinan']);

Route::get('/create', [StokController::class, 'tampilan_create']);

Route::post('/proses-create', [StokController::class, 'proses_create']);

Route::get('/print', [StokController::class, 'tampilan_print']);

Route::post('/print-process', [StokController::class, 'print']);

Route::get('/update/{Kd_Barang}', [StokController::class, 'tampilan_update']);

Route::put('/proses-update/{Kd_Barang}', [StokController::class, 'proses_update']);

Route::delete('/delete/{Kd_Barang}', [StokController::class, 'delete']);

Route::get('/barang-masuk', [StokController::class, 'tampilan_barang_masuk']);

Route::put('/proses-barang-masuk', [StokController::class, 'proses_barang_masuk']);

Route::get('/barang-keluar', [StokController::class, 'tampilan_barang_keluar']);

Route::put('/proses-barang-keluar', [StokController::class, 'proses_barang_keluar']);