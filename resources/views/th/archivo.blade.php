<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('img/favicon.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>Archivo</title>
        @vite(['resources/css/th/archivo.css','resources/js/archivo.js'])
    </head>
    <body>
        <nav class="navbar" style="background-color: rgba(115,188,220,255);">
            <div class="container-fluid">
                <h3>Permisos Autorizados</h3>
                <a href="{{ route('ruta_volver')}}" class="btn btn-light" id="cerrar">Volver</a>
            </div>
        </nav>
        <div class="container">
            <h2>Aquí va los permisos firmados y registrados hasta la fecha</h2><br><br>
            <div class="buttons">
            <button  value="Seleccionar todo" class="btn btn-warning btn-sm" id="seleccionarTodo">Seleccionar todo</button>
            <input type="hidden" name="seleccionados" id="seleccionados" value="">
            
            <form action="{{ route('ruta_exportar')}}" method="post">
           
                <button type="submit" class="btn btn-warning btn-sm" id="boton_excel">Descargar Excel</button><!-- Botón para exportar el excel -->
                <button type="submit" class="btn btn-warning btn-sm" id="boton_pdf">Descargar PDF'S</button><!-- Botón para exportar el excel -->
                </form>
            </div><br>
            <div class="collapse show" id="collapseTable">
                <div class="table-container">
                    <table>
                        <tr>
                            <th>Seleccionar</th>
                            <th>Tipo de permiso</th>
                            <th>Nombre</th>
                            <th>Fecha de solicitud</th>
                            <th>Especificación de cargo</th>
                            <th>Aprobado / Rechazado</th>
                            <th>Revisar</th>
                        </tr>
                        @foreach ($usuarios as $usuario)
                            @foreach ($permisos as $permiso)
                                @if ($usuario->id == $permiso->id_usuario)
                                    <tr>
                                    <td><input type="checkbox" class="checkbox" name="seleccionados" value="{{ $permiso->id }}">
                                </td>
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
                                                <button type="submit"><i class="fa fa-cloud-download" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
<script>

</script>
    </body>
</html>