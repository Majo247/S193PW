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

    public function ProcesarLibro()
    {
        return 'Si llego la info del libro';
    }

    
}
