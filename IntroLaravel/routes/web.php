<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');;


Route::get('/form', function () {
    return view('Formulario');
})->name('rutaform');;


Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes'); */

/* Route :: view('/','inicio')->name('rutainicio');
Route :: view('/form','formulario')->name('rutaform');
Route :: view('/consultar','clientes')->name('rutaclientes'); */

Route::view('/component', 'componentes')->name('rutaComponent');

Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');

Route::get('/consultar', [ControladorVistas::class, 'consulta'])->name('rutaclientes');

Route::post('/enviarCliente', [ControladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

//Rutas para cliente controlador

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
