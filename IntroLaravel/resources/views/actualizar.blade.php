@extends('layouts.plantilla')
@section('conection')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">



        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">{{__('Actualiazar clientes')}}</div>
           
            <div class="card-body text-justify">
            @foreach($cliente as $datos)
            <form action="{{ route('rutaEditar', [$datos->id]) }}" method="POST" onsubmit="return ConfirmelaActualizacion()">
             @csrf
             @method('PUT')

                <div class="mb-3">
                <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
                <input type="text" class="form-control" name="txtnombre" value="{{ $datos->nombre }}">
                <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                 </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                        <input type="text" class="form-control" name="txtapellido" value="{{ $datos->apellido }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo')}}</label>
                        <input type="email" class="form-control" name="txtcorreo" value="{{ $datos->correo }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{ $datos->telefono }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">{{ __('Actualizar') }}</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script> 
        function ConfirmelaActualizacion() {
            return confirm('¿Está seguro de actualizar el cliente?');
        }
    </script>
    
    @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}} 
    @endsection