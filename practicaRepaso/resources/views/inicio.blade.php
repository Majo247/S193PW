<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container mt-5 col-md-6">
    <h1>Universidad Politécnica de Querétaro</h1>
    <p>
    Repaso 1<br>    
    Cruz Sánchez María José<br>
    Ingeniería en Sistemas Computacionales<br>
    Iván Isay Guerra López<br>
    S193<br>
    17/10/24<br>
    </p>
    <a href="{{ route ('rutarepaso')}}" class="btn btn-primary">REPASO 1</a>
</div>
</body>
</html>