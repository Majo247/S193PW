<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarFrituras;

class ControladorFrituras extends Controller
{
    
public function abrirFormulario(){

 return view('formFrituras');
}

public function GuardarFritura(ValidarFrituras $fritura){

    $guardar = $fritura->input('Nombre');
    session()->flash("EXITO","Se ha registrado correctamente " .$guardar);
    return view('formFrituras');
   }

}
