@extends('layouts.plantilla')
@section('contenido')

<div class="card font-monospace">
    <div class="card-header fs-5 text-center text-primary">
        Registro de Libros
    </div>

    @if(session('exito'))
        <script> 
            Swal.fire({
                title: "Respuesta del servidor!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <div class="card-body text-justify">
        <form action="{{ route('rutaLibro') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN:</label>
                <input type="text" class="form-control" name="txtisbn" value="{{old('txtisbn')}}">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="txtisbn" value="{{old('txttitulo')}}">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">Autor:</label>
                <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}">
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">Paginas:</label>
                <input type="text" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}">
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">Año:</label>
                <input type="text" class="form-control" name="txtaño" value="{{old('txtaño')}}">
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="txteditorial" value="{{old('txteditorial')}}">
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">Email de Editorial:</label>
                <input type="text" class="form-control" name="txtemail" value="{{old('txtemail')}}">
            </div>

            <button type="submit" class="btn btn-success btn-sm">Guardar Libro</button>
        </form>

    </div>

 </div>


@endsection