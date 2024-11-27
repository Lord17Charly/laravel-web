<?php

use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');
Route::get('/mascotas/crear', [MascotaController::class, 'create'])->name('mascotas.create');
Route::post('/mascotas', [MascotaController::class, 'store'])->name('mascotas.store');
Route::get('/mascotas/{id}/edit', [MascotaController::class, 'edit'])->name('mascotas.edit');
Route::put('/mascotas/{id}', [MascotaController::class, 'update'])->name('mascotas.update');
Route::delete('/mascotas/{id}', [MascotaController::class, 'destroy'])->name('mascotas.destroy');


Route::get('/citas', [CitaController::class, 'create'])->name('citas.create');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');


Route::get('/servicios', [ServicioController::class, 'create'])->name('servicios.create');
Route::post('/servicios', [ServicioController::class, 'store'])->name('servicios.store');
