<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPrenda;

Route::get('/', [ControladorPrenda::class, 'abrirFormulario'])->name('rutaRegistro');
Route::post('/guardar', [ControladorPrenda::class, 'GuardarPrenda'])->name('guardarPrenda');
