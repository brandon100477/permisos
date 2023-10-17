@extends('herencia.welcome')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    @section('content')

    @role('admin')
    <p>Vista del administrador</p>
    @endrole

    @role('empresario')
    <p>Se hicieron bien las rutas. Empleados</p>
    @endrole

    <p>General</p>
</body>
@endsection
</html>