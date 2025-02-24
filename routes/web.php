<?php

use App\Http\Controllers\SiswaController; //import this
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/siswa',[SiswaController::class,'loadAllSiswa']);
Route::get('/add/siswa',[SiswaController::class,'loadAddSiswaForm']);

Route::post('/add/siswa',[SiswaController::class,'AddSiswa'])->name('AddSiswa');

Route::get('/edit/{id}',[SiswaController::class,'loadEditForm']);
Route::get('/delete/{id}',[SiswaController::class,'deleteSiswa']);

Route::post('/edit/siswa',[SiswaController::class,'EditSiswa'])->name('EditSiswa');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/input-nilai', function () {
        return view('nilai');
    })->name('input-nilai');
   

    
});
