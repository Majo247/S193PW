<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;


class clienteController extends Controller
{
    /**
     * Aqui se va la consulta de todo del CRUD
     */
    public function index()
    {
        $consultaclientes= DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * A qui va el insert 
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "telefono" => $request->input('txttelefono'),
            "correo" => $request->input('txtcorreo'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: ' .$usuario);
        return to_route('rutaform');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { 
        $cliente= DB::select('select * from clientes where id ='.$id.'');
        return view('actualizar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {
        DB::table('clientes')->where('id', $id)->update([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "telefono" => $request->input('txttelefono'),
            "correo" => $request->input('txtcorreo'),
            "updated_at" => Carbon::now(),
        ]);
        $usuario= $request->input('txtnombre');
        session()->flash('Exito','Se actualizo el usuario: ' .$usuario);
        return redirect()->route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = DB::select('select nombre from clientes where id = ' .$id.'');
        $nombre = $registro[0]->nombre;
        DB::table('clientes')->where('id', $id)->delete();
        session()->flash('Exito','El cliente se elimino correctamente: '.$nombre);
        return redirect()->route('rutaclientes');
    }
}
