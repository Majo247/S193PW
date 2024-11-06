@extends('layout.navformularios')
@section('contenido')

@session('EXITO')
<div 
    class="alert alert-primary"
    role="alert"
    >
    <strong>Registro exitoso</strong> {{$value}}
</div>
@endsession


<h1 class="text-center mb-4">Registro fde clientes</h1> 


<div class="card-body">
      <form id="loginForm">
        <div class="mb-3">
          <label for="username" class="form-label">Prenda</label>
          <input type="text" class="form-control" id="prenda" placeholder="Ingresa la prenda" required>
          <small>{{ $errors->first('txtPrenda') }}</small>
        </div>

        <div class="mb-3">
          <label for="username" class="form-label">Color</label>
          <input type="text" class="form-control" id="color" placeholder="Ingresa el color" required>
          <small>{{ $errors->first('txtColor') }}</small>
        </div>

        <div class="col-md-4">
        <label for="ninos" class="form-label">cantida</label>
        <select class="form-select" id="ninos">
          <option selected>Selecciono</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <small>{{ $errors->first('txtcantidsad') }}</small>
        </select>

        <button type="submit" class="btn btn-primary w-100">Guardar Prendas</button>
      </div>







@endsection