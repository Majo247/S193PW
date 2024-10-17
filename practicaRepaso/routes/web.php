<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

// Route::view('/','inicio')->name('rutainicio');
// Route::view('/repaso','repaso1')->name('rutarepaso');

Route::get('/', [ControladorVista::class, 'home'])->name('rutainicio');
Route::get('/repaso', [ControladorVista::class, 'repaso1'])->name('rutarepaso');
Route::post('/mensaje', [ControladorVista::class, 'mensaje'])->name('rutamensaje');