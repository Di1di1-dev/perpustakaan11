<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/data-buku', [DashboardController::class, 'dataBuku'])->name('data.buku');
Route::get('/dashboard/data-siswa', [DashboardController::class, 'dataSiswa'])->name('data.siswa');

Route::get('/data-buku', [BukuController::class, 'index'])->name('data.buku');
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data.siswa');
Route::get('/peminjaman-buku', [PeminjamanController::class, 'index'])->name('peminjaman.buku');
Route::get('/pengembalian-buku', [PengembalianController::class, 'index'])->name('pengembalian.buku');

