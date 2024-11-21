@extends('layouts.plantilla')
@section('conection')


@session('Exito')
    <script>
        Swal.fire({
        title: "Respuesta del Servidor!",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
@endsession
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

            <a href="{{ route('rutaActualizar', [$cliente->id]) }}" class="btn btn-warning btn-sm">{{ __('Actualizar') }}</a>


                <form action="{{ route('rutaBorrar', [$cliente->id]) }}" method="POST" style="display:inline;" onsubmit="return confirmarEliminacion()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                </form>
            </div>
        </div>

        <!-- Confirmacion de la eliminación  -->
        <script> 
        function confirmarEliminacion() {
            return confirm('¿Está seguro de eliminar el cliente?');
        }
    </script>
        
    
    @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}} 
    @endsection
    