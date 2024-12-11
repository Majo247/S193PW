<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
   

<style>
    body, html {
        height: 100%;
    }
    .full-height {
        height: 100vh;
    }
</style>
</head>
<body>


    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">{{__('Bienbenido')}}</h1>
        <p>{{__('Press the button to start....')}}</p>

      <a href="/procesarDatos" class="btn btn-danger">{{__('Go to registration')}}</a>
      
      <a class="btn btn-primary">{{__('Go to registration')}}</a> 
    </div>
</body>
</html>