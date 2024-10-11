@extends('layouts.plantilla')

@section('titulo','Componentes Blade')

@section('conection')

<x-Card encabezado="Componente" titulo="Dinámico" textoBoton="Guardar"> </x-Card>


<x-card encabezado="Componente" titulo="Dinámico" textoBoton="Guardar"> </x-card>

<x-card encabezado="Componente 2" titulo="Dinámico 2" textoBoton="Guardar 2"></x-card>

<x-Alert tipo="danger"> </x-Alert>

<x-Alert tipo="warning"> </x-Alert>

@endsection