<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <!--   <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    
    <!-- <link rel="icon" href="{{ asset('img/favicon.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('../../css/registro.css')}}"> -->

    <title>Prevista</title>
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

</style>
<body>
<h2>Prevista del permiso, compensatorio o licencia:</h2>

<p><strong>Estado de permiso:</strong> {{ $estado }}</p>
    <p><strong>Tipo de permiso:</strong> {{ $pcl }}</p>
    <p>Documento antes de firmar y antes de enviar</p> 
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

    <th rowspan="2" ><strong>Nombre del colaborador</strong></th>
    
    <td  class="text">(Nombre del empleado)</td>
  </tr>
  <tr>
  <td  class="text">(Nombre del empleado)</td>
  </tr>

<!--   <tr>
    <th >Empresa/agencia2</th>
    <td class="text">(Empresa en la que labora)</td>
  </tr> -->
  
</table>
</body>
</html>
