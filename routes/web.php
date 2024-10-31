<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('login');
});
Route::post('/register', [AuthController::class, 'register']);

//PROFIL KOPERASI//=====================================
Route::get('/sejarah', function () {
    return view('profil.sejarah');
});
Route::get('/vismis', function () {
    return view('profil.visimisi');
});
Route::get('/struktur', function () {
    return view('profil.struktur');
});

Route::get('/about', function () {
    return view('profil.about');
});

//SIMPANAN//=====================================
Route::get('/pokok', function () {
    return view('simpanan.pokok');
});
Route::get('/sukarela', function () {
    return view('simpanan.sukarela');
});
Route::get('/wajib', function () {
    return view('simpanan.wajib');
});

Route::get('/simulsim', function () {
    return view('simpanan.simulsim');
});
Route::get('/deposito', function () {
    return view('simpanan.deposito');
});


//PINJAMAN//=====================================
Route::get('/konsumtif', function () {
    return view('pinjaman.konsumtif');
});
Route::get('/multi', function () {
    return view('pinjaman.multi');
});
Route::get('/tanpaagunan', function () {
    return view('pinjaman.tanpaagunan');
});
Route::get('/usaha', function () {
    return view('pinjaman.usaha');
});
Route::get('/simupin', function () {
    return view('pinjaman.simupin');
});

//INFO KOPERASI//=====================================
Route::get('/angsuran', function () {
    return view('info.angsuran');
});
Route::get('/pengajuan', function () {
    return view('info.pengajuan');
});
Route::get('/ceksaldo', function () {
    return view('info.ceksaldo');
});
Route::get('/mutasi', function () {
    return view('info.mutasi');
});