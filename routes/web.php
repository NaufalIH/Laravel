<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PengaduanController;
// use App\Http\Controller\MasyarakatController;
use App\Http\Controllers\detailLaporanController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about');
});

Route::get('/login', function () {
    return view ('login');
});

Route::get('/Tampil', function () {
    return view ('Tampil');
});

Route::get('/isi_pengaduan', function () {
    return view ('isi_pengaduan');
});

Route::get('/login', [loginController::class, "login"])->name('login');

Route::post('/login', [loginController::class, "proses_login"]);
// route::get('/home',[PengaduanController::class, 'index']);
// route::get('/Laporan',[PengaduanController::class, 'index']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
// route::get('/isi-pengaduan',[PengaduanController::class, 'tampil_isi_pengaduan']);
// route::post('/isi-pengaduan',[PengaduanController::class, 'proses_isi_pengaduan']);
Route::get('/', [pengaduanController::class, "index"]);

Route::get('/laporan', [laporanController::class, "laporan"]);
Route::post('/laporan', [laporanController::class, "proses_tambah_pengaduan"]);

Route::get('/detailLaporan', [detailLaporanController::class, "tampilData"]);
Route::get('/detailLaporan/detail/{id_pengaduan}', [detailLaporanController::class, 'detail']);
Route::get('/detailLaporan/hapus/{id_pengaduan}', [detailLaporanController::class, 'hapus']);

// Route::get('/register', [AuthController::class, "register"]);
// Route::post('/register', [AuthController::class, "store"]);

Route::get('/laporanPerOrang', [detailLaporanController::class, 'detail']);   

Route::post('/detailLaporan/update/{id_pengaduan}', [detailLaporanController::class, "update"]);
Route::get('/detailLaporan/update/{id_pengaduan}', [detailLaporanController::class, "tampil_update"]);

// Route::get(/petugas/)