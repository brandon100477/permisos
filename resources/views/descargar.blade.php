<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <!--   <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    
    <!-- <link rel="icon" href="{{ asset('img/favicon.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('../../css/registro.css')}}"> -->

    <title>Decargando</title>
</head>
<style>
    table, th, td{
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    th, td{
        padding: 5px;
    }

    .text{
        text-align: left;
    }

    .ancho{
        padding: 10px;
    }
    .tam{
        font-size: 15px;
    }
    .fondo{
        background-color: #D3D3D3;
    }

</style>
<body>
<h2>Permiso, compensatorio o licencia:</h2>

    <table>
  <tr>
    <th rowspan="3">Logo</th>
    <td><strong>Administración del personal</strong></td>
    <td class="text"><strong>Código: GTH-ADP-FO-011</strong></td>
  </tr>
  <tr>
    <td>Gestión de Talento Humano</td>
    <td class="text">Versión: 8</td>
  </tr>
  <tr>
    <td>Solicitud de permiso, Licencia o Compensatorio</td>
    <td class="text">Actualización: (Preguntar si se cambia el campo)</td>
  </tr>
</table>

<table>
  <tr>
    <th class="text tam"><strong>Nombre del colaborador:</strong></th>
    <td  class="text ancho">{{ $nombre }}</td>
    <th><strong>Empresa/Agencia</strong></th>
    <td  class="text ancho">{{ $empresa }}</td>
  </tr>
</table>

<table>
  <tr>
    <td rowspan="2"><strong>Cargo:</strong> {{ $car }}, {{ $especifi }}</td>
    <td  class="text"><strong>Estado del proceso:</strong> {{ $estado }}</td>
    
  </tr>
  <tr>
  <td  class="text"><strong>Fecha de la solicitud:</strong> {{ $fecha_solicitud }}</td>
  </tr>
</table>

<table>
  <tr>
    <th><strong>Tipo de permiso:</strong></th>
    <td class="text ancho"> {{ $pcl }}</td>

  </tr>
</table>

    
<table>
  <tr>
  <td rowspan="2"><strong>Motivo del permiso, compensatorio o licencia:</strong>  {{ $justificacion }}</td>
    <td class="text"><strong>Desde:</strong> {{ $tiempo_inicio }}</td>
    
  </tr>
  <tr>
  <td class="text"><strong>Hasta:</strong> {{ $tiempo_fin}}</td>
  </tr>
</table>

<table>
  <tr>
  <th rowspan="2"><strong>Firma y cedula del colaborador: </strong></th>
  <td><img src="{{ asset('image_e/' . $firma_e) }}" /></td>
  </tr>
  <tr>
  <td class="text"><strong>C.C.</strong> {{ $cedula}} </td>
  </tr>
  </tr>
</table>

<table>
  <tr>
  <th class="ancho fondo"><strong>Autorización Talento Humano</strong></th>
  </tr>
  <tr>
</table>

<table>
  <tr>
  <th ><img src="{{ asset('image_j/' . $firma_j) }}" /></th>
  <th ><img src="{{ asset('image_th/' . $firma_th) }}" /></th>
  </tr>

  <tr>
  <th >Firma del líder inmediato</th>
  <th>Firma de Líder Talento Humano</th>
  </tr>

</table>

</body>

</html>