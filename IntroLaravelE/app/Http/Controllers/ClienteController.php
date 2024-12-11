<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ClienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta= cliente::all();
        return view('clientes',compact('consulta'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        $addCliente= new cliente();
        $addCliente->nombre=$request->input('txtnombre');
        $addCliente->apellido=$request->input('txtapellido');
        $addCliente->correo=$request->input('txtcorreo');
        $addCliente->telefono=$request->input('txttelefono');
        $addCliente->save();

        $msj= $request->input ('txtnombre');
        session()->flash('exito','Se guardo el cliente: '.$msj);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = cliente::find($id);
        return view('Actualizar', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidadorCliente $request, string $id)
    {
        $addCliente= cliente::find($id);
        $addCliente->nombre=$request->input('txtnombre');
        $addCliente->apellido=$request->input('txtapellido');
        $addCliente->correo=$request->input('txtcorreo');
        $addCliente->telefono=$request->input('txttelefono');
        $addCliente->save();

        $msj= $request->input ('txtnombre');
        session()->flash('exito','Se actualizo el cliente: '.$msj);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = cliente::find($id);
        $msj = $cliente->nombre;
        $cliente->delete();
        session()->flash('exito','Se elimino el cliente: '.$msj);
        return redirect()->back();
    }
}