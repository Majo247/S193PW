<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function home(){
        return view('RegistroPrenda');
    }

    public function procesarPrenda(Request $peticion){

    
    $validacion= $peticion->validate([
        'txtPrenda'=> 'required',
        'txtColor'=> 'required',
        'txtCantidad'=> 'required|numeric'

      ]);

   
    $Prenda= $peticion->input('txtPrenda');
    $Color= $peticion->input('txtColor');
    session()->flash('exito','Se guardo la prenda: ' .$Prenda.$Color);
    return to_route('returnInicio');
    }

}
