<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RumahSakitController;
use App\Models\RumahSakit;

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
});
