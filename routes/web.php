<?php

use App\Http\Controllers\SiswaController; //import this
use App\Http\Controllers\NilaiController;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/siswa', [SiswaController::class, 'loadAllSiswa']);
Route::get('/add/siswa', [SiswaController::class, 'loadAddSiswaForm']);
Route::post('/add/siswa', [SiswaController::class, 'AddSiswa'])->name('AddSiswa');
Route::get('/edit/{id}', [SiswaController::class, 'loadEditForm']);
Route::get('/delete/{id}', [SiswaController::class, 'deleteSiswa']);
Route::post('/edit/siswa', [SiswaController::class, 'EditSiswa'])->name('EditSiswa');
Route::get('/hasil-nilai', [SiswaController::class, 'loadAllSiswa'])->name('hasil-nilai');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    
    Route::get('/input-nilai', function () {
        return view('guru.nilai');
    })->name('input-nilai');

    Route::get('/akun', [AccountController::class, 'loadAllAkun'])->name('akun');
    Route::get('/edit/akun/{id}', [AccountController::class, 'loadEditAkun']);
    Route::get('/delete/akun/{id}', [AccountController::class, 'deleteAkun']);
    Route::post('/edit/akun', [AccountController::class, 'EditAkun'])->name('EditAkun'); 

    
});

Route::get('/home', [AdminController::class, 'index'])->name('home');
