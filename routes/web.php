<?php

use App\Http\Controllers\BbidealController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MknsehatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bbideal', [BbidealController::class, 'index']);
Route::get('/bbideal/tambah', [BbidealController::class, 'create']);
Route::post('/bbideal/store', [BbidealController::class, 'store']);
Route::get('/bbideal/edit/{id}', [BbidealController::class, 'edit']);
Route::put('/bbideal/update/{id}', [BbidealController::class, 'update']);
Route::get('/bbideal/hapus/{id}', [BbidealController::class, 'delete']);
Route::get('/bbideal/destroy/{id}', [BbidealController::class, 'destroy']);
Route::get('/bbideal/cetak', [BbidealController::class, 'cetak']);
// untuk makanan sehat
Route::get('/mknsehat', [MknsehatController::class, 'index']);
Route::get('/mknsehat/tambah', [MknsehatController::class, 'create']);
Route::post('/mknsehat/store', [MknsehatController::class, 'store']);
Route::get('/mknsehat/edit/{id}', [MknsehatController::class, 'edit']);
Route::put('/mknsehat/update/{id}', [MknsehatController::class, 'update']);
Route::get('/mknsehat/hapus/{id}', [MknsehatController::class, 'delete']);
Route::get('/mknsehat/destroy/{id}', [MknsehatController::class, 'destroy']);

Route::post('/Order', [BbidealController::class, 'CreateTransaction'])->name('transaction');
Route::get('/transaksi', [BbidealController::class, 'index']);
Route::get('/', [BbidealController::class, 'index']);
