<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelBarangController;

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
//Read
Route::get('/dashboard', [ModelBarangController::class, 'show']);
Route::get('/', [ModelBarangController::class, 'show']);

//Create
Route::get('/tambah-barang', function(){
    return view('dashboard-tambah-barang');
});
Route::post('insert_proses', [ModelBarangController::class, 'store']);

//Update
Route::get('/update-barang/{id}', [ModelBarangController::class, 'single']);
Route::post('/update_proses', [ModelBarangController::class, 'update']);

//Delete
Route::get('/delete-barang/{id}', [ModelBarangController::class, 'destroy']);



