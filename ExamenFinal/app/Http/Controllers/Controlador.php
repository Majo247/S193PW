<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controlador;

class Controlador extends Controller
{
    public function home(){
        return view('Inicio');
    }

    public function create()
    {
        return view('Registro');
    }

    public function procesarDatos(Request $peticion){

    
        $validacion= $peticion->validate([
            'txtNombre'=> 'required|min:4 |max:20 ',
            'txtCorreo'=> 'required',
            'txtTelefono'=> 'required|numeric'
    
          ]);
    
       
        $Nombre= $peticion->input('txtNombre');
        session()->flash('exito','Se guardo la prenda: ' .$Nombre);
        return to_route('returnInicio');
        }
}
