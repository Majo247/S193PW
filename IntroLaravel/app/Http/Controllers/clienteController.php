<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use sCarbon\Carbon;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "telefono" => $request->input('telefono'),
            "direccion" => $request->input('direccion'),
            "created_at" => Carbon::now(),
            "update_at" => Carbon::now(),
        ]);

        return redirect()->route('clientes.index')->with('mensaje', 'Cliente agregado correctamente');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
