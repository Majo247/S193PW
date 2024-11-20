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
    public function edit(validadorCliente $request, string $id)
    { 
        $cliente= DB::table('clientes')->where('id', '=', $id)->first();
        return view('actualizar');
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
        session()->flash('exito','Se actualizo el usuario: ' .$usuario);
        return to_route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
