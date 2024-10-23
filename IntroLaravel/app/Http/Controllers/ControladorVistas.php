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

    public function procesarCliente(Request $peticion)
    {
       
     //redireccion usando la ruta    
    //   return redirect('/');

    //   return redirect()->route('rutaclientes');


    // redireccion a la origen de la petción
    // return back();



    //redireccion con cariable adjunta
    // $id= [['usuario'=>1],['usuario'=>2]];

    // return view('formulario' ,compact('id'));


    //redireccion con un mensaje flash en session 
    $usuario= $peticion->input('txtnombre');
    session()->flash('exito','Seguardo el usuario: ' .$usuario);
    return to_route('rutaform');


    }

}
