<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarRegistro;

class ControladorRegistro extends Controller
{
    
public function abrirFormulario(){

 return view('formRegistro');
}

public function GuardarRgistro(ValidarRegistro $fritura){

    $guardar = $fritura->input('Nombre');
    session()->flash("EXITO","Se ha registrado correctamente " .$guardar);
    return view('formRegistro');
   }

   
   
}