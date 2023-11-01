<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
        <section class="inicio">
            <h2>Ver permisos de empleados</h2>
            <a href="{{ route('ruta_volver')}}" class="cerrar" id="cerrar">Volver</a>
        </section>
    <p>Aquí va los permisos solicitados hasta la fecha</p>
    <br>
    <br>
    <table>
    <tr>
        <th>Tipo de permiso</th>
        <th>Nombre</th>
        <th>Fecha de solicitud</th>
        <th>Especificación de cargo</th>
        <th>Aprovar/Rechazar</th>
    </tr>

    @foreach ($usuarios as $usuario)
        @foreach ($permisos as $permiso)
            @if ($usuario->id == $permiso->id_usuario)
                <tr>
                <td>{{ $permiso->p_c_l }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $permiso->fecha_solicitud }}</td>
                    <td>{{ $especificacion }}</td>
                    <td>
                        <form action="{{ route('ruta_revisar') }}" method="post">
                            @csrf
                            <input type="hidden" name="ide" id="ide" value="{{ $permiso->id }}">
                            <button type="submit">Ver</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    @endforeach
</table>







</body>
</html>