<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
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
    .ancho2{
      padding: 30px;
    }
    .tam{
      font-size: 15px;
    }
    .fondo{
      background-color: #D3D3D3;
    }
    .img{
      width: 300px;
      height: 60px;
    }
    
  </style>
  <body>
    <h2>Permiso, compensatorio o licencia:</h2>
    <table>
      <tr>
        <th rowspan="3"><img src="{{ $image_logo }}"  class="img" /></th>
        <td><strong>Administración del personal</strong></td>
        <td class="text"><strong>Código: GTH-ADP-FO-011</strong></td>
      </tr>
      <tr>
        <td>Gestión de Talento Humano</td>
        <td class="text">Versión: 8</td>
      </tr>
      <tr>
        <td>Solicitud de permiso, Licencia o Compensatorio</td>
        <td class="text">Actualización: 21-07-2023</td>
      </tr>
    </table>
    <table>
      <tr>
        <th class="text tam"><strong>Nombre del colaborador:</strong></th>
        <td  class="text ancho">{{ $nombre[$i] }}</td>
        <th><strong>Empresa/Agencia</strong></th>
        <td  class="text ancho">{{ $empresa[$i]  }}</td>
      </tr>
    </table>
    <table>
      <tr>
        <td rowspan="2"><strong>Cargo:</strong> {{ $car[$i]  }}, {{ $especifi[$i] }}</td>
        <td  class="text"><strong>Estado del proceso:</strong> {{ $estado[$i]  }}</td>
      </tr>
      <tr>
        <td  class="text"><strong>Fecha de la solicitud:</strong> {{ $fecha_solicitud[$i] }}</td>
      </tr>
    </table>
    <table>
      <tr>
        <th><strong>Tipo de permiso:</strong></th>
        <td class="text ancho"> {{ $pcl[$i]  }}</td>
      </tr>
    </table>
    <table>
      <tr>
        <td rowspan="2"><strong>Motivo del permiso, compensatorio o licencia:</strong>  {{ $justificacion[$i]  }}</td>
        <td class="text"><strong>Desde:</strong> {{ $hora_inicio[$i]  }} <br><br><strong>Hasta:</strong> {{ $hora_fin[$i] }}</td>
      </tr>
      <tr>
        <td class="text"><strong>Fecha inicial:</strong> {{ $fecha_inicio[$i] }} <br> <br><strong>Fecha final:</strong> {{ $fecha_fin[$i]}}</td>
      </tr>
    </table>
    <table>
      <th><strong>Remunerado: </strong></th>
      <td class="text">{{ $remunerado[$i]  }}</td>
    </table>
    <table>
      <tr>
        <th rowspan="2"><strong>Firma y cedula del colaborador: </strong></th>
        <td><img src="{{ $image_e[$i]  }}" class="img"/></td>
      </tr>
      <tr>
        <td class="text"><strong>C.C.</strong> {{ $cedula[$i] }} </td>
      </tr>
    </table>
    <table>
      <tr>
        <th class="ancho fondo"><strong>Autorización Talento Humano</strong></th>
      </tr>
    </table>
    <table>
      <tr>
        <th class="text"><strong>Observaciones:</strong></th>
      </tr>
      <tr>
        <td class="ancho2 text">{{ $obs[$i]  }}</td>
      </tr>
    </table>
    <table>
      <tr>
        <th ><img src="{{ $image_j[$i]  }}" class="img"/></th>
        <th ><img src="{{ $image_th[$i] }}" class="img"/></th>
      </tr>
      <tr>
        <th >Firma del líder inmediato</th>
        <th>Firma de Líder Talento Humano</th>
      </tr>
      <div class="page-break"></div>
    </table>

  </body>
</html>