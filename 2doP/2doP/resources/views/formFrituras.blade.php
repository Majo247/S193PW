<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])


</head>
<body>

@session('EXITO')
<div 
    class="alert alert-primary"
    role="alert"
    >
    <strong>Registro exitoso</strong> {{$value}}
</div>
@endsession



    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">

    <form action="/Guardar" method="POST">
    @csrf

        <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="Nombre" value="{{old('Nombre')}}">
            <small>{{$errors->first('Nombre')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" class="form-control" name= "Sabor" value="{{old('Sabor')}}">
            <small>{{$errors->first('Sabor')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" class="form-control"  name= "Peso" value="{{old('Peso')}}">
            <small>{{$errors->first('Peso')}}</small>
        </div>

        <button type="" class="btn btn-primary "> Guardar Fritura</button>
</div>

</body>
</html>