<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;


// Route::get('/',[Controlador::class, 'home'])->name('returnInicio');

// Route::post('/Registro', [Controlador::class, 'Registro'])->name('rutaRegis');


Route::view('/','Inicio')->name('rutaInicio');
Route::view('/Resgistro','Registro')->name('rutaRegistro');
Route::post('/procesarDatos', [Controlador::class, 'procesarDatos']);