<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RumahSakitController;


Route::get('/', function () {
    return view('index');
});

Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', fn () => view('admin.hospital'))->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/hospital', [RumahSakitController::class, 'index'])->name('hospital');
    Route::post('/hospital', [RumahSakitController::class, 'store'])->name('hospital.store');
    Route::get('/hospital/{hospital}', [RumahSakitController::class, 'edit'])->name('hospital.edit');
    Route::put('/hospital/{hospital}', [RumahSakitController::class, 'update'])->name('hospital.update');
    Route::delete('/hospital/{id}', [RumahSakitController::class, 'destroy'])->name('hospital.delete');

    Route::get('/patient', [PasienController::class, 'index'])->name('patient');
    Route::post('/patient', [PasienController::class, 'store'])->name('patient.store');
    Route::get('/patient/{patient}', [PasienController::class, 'edit'])->name('patient.edit');
    Route::put('/patient/{patient}', [PasienController::class, 'update'])->name('patient.update');
    Route::delete('/patient/{id}', [PasienController::class, 'destroy'])->name('patient.delete');
    Route::get('/patient/filter/{rumahSakitId}', [PasienController::class, 'filterByRumahSakit']);
});
