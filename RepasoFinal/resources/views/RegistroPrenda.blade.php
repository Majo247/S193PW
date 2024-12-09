<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
@if(session('exito'))
        <script> 
            Swal.fire({
                title: "Respuesta del servidor!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif



    <h1>Registro pendas</h1>
<form action="/procesarprenda" method="POST">
    @csrf
    
    <label>Prenda</label>
    <input type="text" name="txtPrenda">
    <small class="text-danger fst-italic">{{ $errors->first('txtPrenda') }}</small>

    <label>Color</label>
    <input type="text" name="txtColor">
    <small class="text-danger fst-italic">{{ $errors->first('txtColor') }}</small>

    <label>Cantidad</label>
    <input type="text" name="txtCantidad">
    <small class="text-danger fst-italic">{{ $errors->first('txtCantidad') }}</small>

    <button type="submit">Guardar prendas</button>
</form>
</body>
</html>