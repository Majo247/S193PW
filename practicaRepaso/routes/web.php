<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

// Route::view('/','inicio')->name('rutainicio');
// Route::view('/repaso','repaso1')->name('rutarepaso');

Route::get('/', [ControladorVista::class, 'home'])->name('rutainicio');
Route::get('/repaso', [ControladorVista::class, 'repaso1'])->name('rutarepaso');

Route::post('/mensaje', [ControladorVista::class, 'convertidor'])->name('rutaConvertidor');
Route::post('/convertidor2', [ControladorVista::class, 'convertirGBaMB'])->name('rutaConvertidor2');
Route::post('/convertidor3', [ControladorVista::class, 'convertirGBaTB'])->name('rutaConvertidor2');
Route::post('/convertidor4', [ControladorVista::class, 'convertirTBaGB'])->name('rutaConvertidor2');