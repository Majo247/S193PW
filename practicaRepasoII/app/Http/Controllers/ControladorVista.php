<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    //
    public function Principal()
    {
        return view('Principal');
    }

    public function Registro()
    {
        return view('Registro');
    }

    public function procesarLibro(Request $peticion)
    {
        $titulo = $peticion->input('txttitulo');
        session()->flash('exito', 'Se guardó el Libro: ' . $titulo);
        return to_route('rutaRegistro');
    }
    
}
