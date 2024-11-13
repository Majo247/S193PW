<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorPrenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller; // Asegúrate de incluir esta línea

class ControladorPrenda extends Controller
{
    public function abrirFormulario()
    {
        return view('Registro');
    }

    public function GuardarPrenda(ValidadorPrenda $request)
    {
        // Obtener el nombre de la prenda desde la solicitud validada
        $nombre = $request->input('Nombre');

        // Guardar el mensaje de éxito en la sesión
        Session::flash('EXITO', "Se ha registrado correctamente: " . $nombre);

        // Redirigir a la misma vista para ver el mensaje
        return redirect()->route('rutaRegistro');
    }
}