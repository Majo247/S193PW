<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

// Route::view('/','Principal')->name('rutaPrincipal');
// Route::view('/Resgistro','Registro')->name('rutaRegistro');



Route::get('/',[ControladorVista::class,'Principal'])->name('rutaPrincipal');
Route::get('/Registro',[ControladorVista::class,'Registro'])->name('rutaRegistro');
Route::post('/enviarLibro',[ControladorVista::class,'procesarLibro'])->name('rutaLibro');