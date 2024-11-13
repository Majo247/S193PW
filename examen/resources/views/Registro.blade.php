@extends('layout.navplantilla')

@section('contenido')


@if(session('EXITO'))
    <div class="alert alert-primary" role="alert">
        <strong>Registro exitoso:</strong> {{ session('EXITO') }}
    </div>
@endif

<h1 class="text-center mb-4">Registro de clientes</h1>

<div class="card-body">
    <form action="{{ route('guardarPrenda') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="prenda" class="form-label">Prenda</label>
            <input type="text" name="Nombre" class="form-control" id="prenda" placeholder="Ingresa la prenda" required>
            <small class="text-danger">{{ $errors->first('Nombre') }}</small>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" name="Color" class="form-control" id="color" placeholder="Ingresa el color" required>
            <small class="text-danger">{{ $errors->first('Color') }}</small>
        </div>

        <div class="col-md-4">
            <label for="cantidad" class="form-label">Cantidad</label>
            <select class="form-select" name="Cantidad" id="cantidad">
                <option selected>Selecciona</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <small class="text-danger">{{ $errors->first('Cantidad') }}</small>
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">Guardar Prenda</button>
    </form>
</div>

@endsection
