<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* usamos este controlador para administrar la logica de las vistas */
class ControladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }
}
