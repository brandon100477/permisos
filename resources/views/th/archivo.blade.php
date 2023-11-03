<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('img/favicon.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('../../css/registro.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>Archivo</title>
    </head>
    <body>
        <section class="inicio">
            <h2>Autorizar permisos</h2>
            <a href="{{ route('ruta_volver')}}" class="cerrar" id="cerrar">Volver</a>
        </section>
        <p>Aquí va los permisos solicitados hasta la fecha</p><br><br>
        <table>
            <tr>
                <th>Tipo de permiso</th>
                <th>Nombre</th>
                <th>Fecha de solicitud</th>
                <th>Especificación de cargo</th>
                <th>Aprovado/Rechazado</th>
                <th>Revizar</th>
            </tr>
            @foreach ($usuarios as $usuario)
                @foreach ($permisos as $permiso)
                    @if ($usuario->id == $permiso->id_usuario)
                        <tr>
                            <td>{{ $permiso->p_c_l }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $permiso->fecha_solicitud }}</td>
                            <td>
                            @foreach ($especificaciones as $especificacion)
                                @if ($especificacion->id_usuario == $usuario->id)
                                    {{ $especificacion->especificacion }}
                                @endif
                            @endforeach
                            </td>
                            <td>
                            {{ $permiso->estado_solicitud }}
                            </td> 
                            <td>
                                <form action="{{ route('ruta_descargar') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="ide" id="ide" value="{{ $permiso->id }}">
                                    <button type="submit">Descargar</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </table>
    </body>
</html>