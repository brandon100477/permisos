@extends('herencia.welcome')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
    <title>Bienvenido</title>
</head>
<body>
    @section('content')
    <div class="contenedor">
            <form method="POST">
                <div class="col-md-12">
                    <h4 id="h4">Ver los registros solicitados</h4>
                    <div class="card">
                        <!--Boton para registrar un nuevo formulario.-->
                        <a href="{{ route('ruta_registros') }}" id="butons">Ver</a>
                    </div><br><br><br><br>
                    <h4 id="h4">Solicitar un nuevo permiso</h4>
                    <div class="card">
                        <!--Boton para ver los registros hasta el momento.-->
                        <a href="{{ route('ruta_permisos') }}" id="butons">Diligenciar</a>
                    </div>
                </div>
            </form>
        </div>    

</body>
@endsection
</html>