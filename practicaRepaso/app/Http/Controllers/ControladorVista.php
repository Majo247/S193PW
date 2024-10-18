<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function repaso1()
    {
        return view('repaso1');
    }
    
    public function convertirMBaGB(Request $peticion)
    {
        $valor = $peticion->input('valor'); 
        $resultado = $valor * 0.001;
        return (string)$resultado;
    }
    public function convertirGBaMB(Request $peticion)
    {
        $valor = $peticion->input('valor'); 
        $resultado = $valor * 1000;
        return (string)$resultado;
    }
    public function convertirGBaTB(Request $peticion)
    {
        $valor = $peticion->input('valor'); 
        $resultado = $valor * 0.001;
        return (string)$resultado;
    }
    public function convertirTBaGB(Request $peticion)
    {
        $valor = $peticion->input('valor'); 
        $resultado = $valor * 1000;
        return (string)$resultado;
    }
}
