<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso 1</title>
    @vite(['resources/js/app.js'])

</head>
<body>
<div class="container mt-5 col-md-6">
<div class="card font-monospace">
<div class="card-header fs-5 text-center text-primary">Convertidor</div>
<div class="card-body text-justify">            

<form action="/mensaje" method="POST">
            @csrf
            <div class="mb-3">
            <label for="valor">Convertir de MB a GB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
            </div>
        </form>

        <form action="/convertidor2" method="POST">
            @csrf
            <div class="mb-3">
            <label for="valor">Convertir de GB a MB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
            </div>
        </form>

        <form action="/convertidor3" method="POST">
            @csrf
            <div class="mb-3">
            <label for="valor">Convertir de GB a TB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
            </div>  
        </form>

        <form action="/convertidor4" method="POST">
            @csrf
            <div class="mb-3">
            <label for="valor">Convertir de TB a GB:</label>
            <input type="number" name="valor" placeholder="Ingresa el valor" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
            </div>  
        </form>
   </div>
  </div>
</div>  

</body>
</html>