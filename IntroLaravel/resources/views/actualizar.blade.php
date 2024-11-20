@extends('layouts.plantilla')
@section('conection')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @foreach ($consultaclientes as $cliente)

      

        <div class="card text-justify font-monospace mt-4">

            <div class="card-header fs-5 text-primary">{{$cliente->nombre}}</div>
            <div class="card-body">
                <h5 class="fw-bold">{{$cliente->correo}}</h5>
                <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
            <a href="{{ route('rutaActualizar')}}" class="btn btn-primary">{{__('Actualizar')}}</a> 
            </div>
        </div>



        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">{{__('Actualiazar clientes')}}</div>
           
            <div class="card-body text-justify">

                <form action="{{route('rutaclientes')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}}</label>
                        <input type="text" class="form-control" name="txtnombre" value=" {{old('$cliante->txtnombre')}} ">
                        <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                        <input type="text" class="form-control" name="txtapellido" value=" {{('cliante->txtapellido')}} ">
                        <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo')}}</label>
                        <input type="email" class="form-control" name="txtcorreo" value=" {{old('$cliante->txtcorreo')}} ">
                        <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                        <input type="text" class="form-control" name="txttelefono" value=" {{old('$cliante->txttelefono')}} ">
                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 mt-2 mb-1">
                        <a href="{{ route('rutaclientes')}}" class="btn btn-warning btn-sm">{{__('Actualizar cliente')}}</a> 
                        <button type="submit" class="btn btn-success btn-sm">{{__('Ctualizar')}}</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    
    @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}} 
    @endsection