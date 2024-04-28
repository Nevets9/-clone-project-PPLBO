<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengaturanController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'mahasiswaDashboard'])->middleware('auth');

Route::get('/pengaturan', [PengaturanController::class, 'index'])->middleware('auth');

Route::put('/pengaturan', [PengaturanController::class, 'updatePassword'])->middleware('auth');

Route::post('/pengaturan', [PengaturanController::class, 'hapusAkun'])->middleware('auth');

Route::get('/biodata', [DashboardController::class, 'biodata'])->middleware('auth');

Route::get('/akademik', [DashboardController::class, 'akademik'])->middleware('auth');

Route::get('/jadwalKuliah', function () {
    return view('jadwalKuliah');
})->middleware('auth');

Route::get('/usept', function () {
    return view('usept');
})->middleware('auth');


Route::get('/isiBiodata', function () {
    return view('isiBiodata');
})->middleware('auth');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboardAdmin', [DashboardController::class, 'adminDashboard'])->middleware('
auth');