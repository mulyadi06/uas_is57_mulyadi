<?php

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TujuanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tujuan', [TujuanController::class, 'index']);
Route::get('/tujuan/form', [TujuanController::class, 'create']);
Route::post('/tujuan/store', [TujuanController::class, 'store']);
Route::get('/tujuan/edit/{id}', [TujuanController::class, 'edit']);
Route::put('/tujuan/{id}', [TujuanController::class, 'update']);
Route::delete('/tujuan/{id}', [TujuanController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/form', [TransaksiController::class, 'create']);
Route::post('/transaksi/store', [TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit']);
Route::put('/transaksi/{id}', [TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy']);