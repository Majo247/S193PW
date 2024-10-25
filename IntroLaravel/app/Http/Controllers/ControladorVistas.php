<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

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

    public function procesarCliente(validadorCliente $peticionV)
    {
       
     //redireccion usando la ruta    
    //   return redirect('/');

    //   return redirect()->route('rutaclientes');


    // redireccion a la origen de la petción
    //return back();



    //redireccion con variable adjunta
    // $id= [['usuario'=>1],['usuario'=>2]];

    //return view('formulario' ,compact('id'));


    //se guarda en una variable para darle un valor a la peticion validate que comprueba las condiciones 
    //comprueba que exista el required 
    $validacion= $peticion->validate([
        'txtnombre'=> 'required|min:4 |max:20 ',
        'txtapellido'=> 'required',
        'txtcorreo'=> 'required',
        'txttelefono'=> 'required|numeric'
      ]);

    //redireccion con un mensaje flash en session 
    $usuario= $peticion->input('txtnombre');
    session()->flash('exito','Seguardo el usuario: ' .$usuario);
    return to_route('rutaform');


    }

}
