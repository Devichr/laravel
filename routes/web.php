<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/store', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/check', [LoginController::class, 'check'])->name('check');
Route::get('/input', [RegisterController::class, 'input']);
Route::post('/proses', [RegisterController::class, 'proses']);


Route::get("/pegawai/edit/{id}", [PegawaiController::class, 'update']);
Route::get("/pegawai/{id}", [PegawaiController::class, 'delete']);
Route::get("/pegawai/create", [PegawaiController::class, 'add']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
