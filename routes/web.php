<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Petugas\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Petugas\LaporanAduanController;
use App\Http\Controllers\Petugas\StatusAduanController;
use App\Http\Controllers\User\HasilAduanController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PengaduanUserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


// Autentikasi 
Route::get('login', [LoginController::class, 'index'])->name('auth.index');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


//User
Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['auth'])->group(function () { 
    //Pengaduan
    Route::get('pengaduan', [PengaduanUserController::class, 'index'])->name('pengaduan.index');
    Route::post('pengaduan-simpan', [PengaduanUserController::class, 'store'])->name('pengaduan.store');
    //tanggapan
    Route::get('tanggapan', [HasilAduanController::class, 'index'])->name('tanggapan.index');
    Route::get('tanggapan/{id}', [HasilAduanController::class, 'detail'])->name('tanggapan.detail');
});

    //Petugas
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.petugas');
    // Laporan Aduan
    Route::get('laporan-aduan', [LaporanAduanController::class, 'index'])->name('laporan.index');
    Route::get('detail-aduan/{id}', [LaporanAduanController::class, 'detail'])->name('laporan.detail');
    Route::post('tanggapan-petugas/{id}', [LaporanAduanController::class, 'respon'])->name('tanggapan.store');
    //Status
    Route::get('aduan-setuju', [StatusAduanController::class, 'setuju'])->name('status.setuju');
    Route::get('aduan-tolak', [StatusAduanController::class, 'tolak'])->name('status.tolak');

    //Admin
    Route::get('dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');

