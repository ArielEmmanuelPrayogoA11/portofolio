<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Admin\PoliController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Doctor\PeriksaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatadokterController;
use App\Http\Controllers\Admin\DatapasienController;
use App\Http\Controllers\Pasien\DaftarpoliController;
use App\Http\Controllers\Doctor\JadwaldokterController;
use App\Http\Controllers\Pasien\DetailperiksaController;
use App\Http\Controllers\Doctor\DashboarddokterController;
use App\Http\Controllers\Pasien\DashboardpasienController;




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class, 'index']);



// -------------------ADMIN PANEL-------------------
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard' , [DashboardController::class, 'index']);


    // KELOLA OBAT
    Route::get('/obat' , [ObatController::class, 'index']);
    Route::get('/add-obat' , [ObatController::class, 'create']);
    Route::post('/add-obat' , [ObatController::class, 'store']);
    Route::get('/edit-obat/{obat_id}' , [ObatController::class, 'edit']);
    Route::put('/update-obat/{obat_id}' , [ObatController::class, 'update']);
    Route::get('/delete-obat/{obat_id}' , [ObatController::class, 'destroy']);
    // KELOLA USER
    Route::get('/users' , [UserController::class,'index']);
    Route::get('/users/{user_id}' , [UserController::class,'edit']);
    Route::put('/update-user/{user_id}' , [UserController::class,'update']);

    // KELOLA POLI
    Route::get('/poli' , [PoliController::class, 'index']);
    Route::get('/add-poli' , [PoliController::class, 'create']);
    Route::post('/add-poli' , [PoliController::class, 'store']);
    Route::get('/edit-poli/{poli_id}' , [PoliController::class, 'edit']);
    Route::put('/update-poli/{poli_id}' , [PoliController::class, 'update']);
    Route::get('/delete-poli/{poli_id}' , [PoliController::class, 'destroy']);

    // KELOLA PASIEN
    Route::get('/data-pasien',[DatapasienController::class,'index']);
    Route::get('/edit-pasien/{pasien_id}' , [DatapasienController::class, 'edit']);
    Route::put('/update-pasien/{pasien_id}' , [DatapasienController::class, 'update']);
    
    
    // KELOLA DOKTER
    Route::get('/data-dokter',[DatadokterController::class,'index']);
    Route::get('/edit-dokter/{dokter_id}' , [DatadokterController::class, 'edit']);
    Route::put('/update-dokter/{dokter_id}' , [DatadokterController::class, 'update']);

    
});


// -------------------DOCTOR PANEL-------------------
Route::prefix('doctor')->middleware(['auth','isDoctor'])->group(function(){

    // PROFIL
    Route::get('/dashboard' , [DashboarddokterController::class, 'index']);
    Route::post('/add-profil' , [DashboarddokterController::class, 'profil']);


    // JADWAL PERIKSA
    Route::get('/jadwal', [JadwaldokterController::class, 'index']);
    Route::post('/add-jadwal', [JadwaldokterController::class, 'tambahjadwal']);
    Route::get('/delete-jadwal/{jadwal_id}' , [JadwaldokterController::class, 'destroy']);
    // EDIT AKTIF JADWAL
    Route::get('/edit-jadwal/{jadwal_id}' , [JadwaldokterController::class, 'edit']);
    Route::put('/update-jadwal/{jadwal_id}' , [JadwaldokterController::class, 'update']);

    
    // PEMERIKSAAN
    Route::get('/periksa', [PeriksaController::class, 'index']);

    // GANTI STATUS
    Route::get('/kelola-dafpol/{dafpol_id}', [PeriksaController::class, 'keloladafpol']);
    Route::put('/update-dafpol/{dafpol_id}' , [PeriksaController::class, 'update']);

    // NGASI CATATAN DSB
    Route::get('/periksa-dafpol/{dafpol_id}', [PeriksaController::class, 'periksadafpol']);
    Route::post('/add-periksa/{dafpol_id}' , [PeriksaController::class, 'createperiksa']);



    // RIWAYAT
    Route::get('/riwayat', [PeriksaController::class, 'riwayatpasien']);
    Route::get('/delete-dafpol/{dafpol_id}', [PeriksaController::class, 'destroy']);
  

});

// -------------------PASIEN PANEL-------------------
Route::prefix('pasien')->middleware(['auth','isPasien'])->group(function(){

    // PRROFIL
    Route::get('/dashboard' , [DashboardpasienController::class, 'index']);
    Route::post('/add-profil' , [DashboardpasienController::class, 'profil']);

    // DAFTAR POLI
    Route::get('/daftar-poli', [DaftarpoliController::class, 'index']);
    Route::post('/add-daftarpoli', [DaftarpoliController::class, 'createdaftar']);
    Route::get('/delete-daftarpoli/{dafpoli_id}', [DaftarpoliController::class, 'destroy']);

    // Detail Periksa
    Route::get('/detail-periksa/{id_daftar_poli}', [DetailperiksaController::class, 'index']);
    Route::post('/add-nota/{id_daftar_poli}', [DetailperiksaController::class, 'storenota']);


});