<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//profil -------------------------------//>
{
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
}

//simpanan -------------------------------//>
{
    Route::get('/pokok', function () {
        return view('simpanan.pokok');
    });
    Route::get('/wajib', function () {
        return view('simpanan.wajib');
    });
    Route::get('/sukarela', function () {
        return view('simpanan.sukarela');
    });
    Route::get('/deposito', function () {
        return view('simpanan.deposito');
    });
    Route::get('/simulsim', function () {
        return view('simpanan.simulsim');
    });  
}
//pinjaman -------------------------------//>
{
    Route::get('/konsumtif', function () {
        return view('pinjaman.konsumtif');
    });
    Route::get('/usaha', function () {
        return view('pinjaman.usaha');
    });
    Route::get('/multi', function () {
        return view('pinjaman.multi');
    });
    Route::get('/tanpaagunan', function () {
        return view('pinjaman.tanpaagunan');
    });
    Route::get('/simupin', function () {
        return view('pinjaman.simupin');
    });
    Route::get('/pengpin', function () {
        return view('pinjaman.pengpin');
    });
    Route::get('/riwayat', function () {
        return view('pinjaman.riwayat');
    });    
}

Route::get('/kontak', function () {
    return view('kontak');
});
