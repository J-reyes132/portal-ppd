<?php

use App\Http\Controllers\AplicacionController;
use App\Http\Controllers\ArquitecturaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/aplicacion', [AplicacionController::class, 'index'])->name('aplicacion.index');
Route::get('/Aquitectura', [ArquitecturaController::class, 'index'])->name('arquitectura.index');
Route::get('/evolucion', [AplicacionController::class, 'evolucion'])->name('evolucion.index');
Route::get('/tecnica', [AplicacionController::class, 'tecnica'])->name('tecnica.index');
Route::get('/referencias', [AplicacionController::class, 'referencias'])->name('referencias.index');
