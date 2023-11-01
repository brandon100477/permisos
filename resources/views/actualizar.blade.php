<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../../css/registro.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Permisos</title>
</head>
<style>  
    .img{
      width: 300px;
      height: 60px;
    }
    </style>
<body>
        <section class="inicio">
            <h2>Revisar y aprobar</h2>
            <a href="{{ route('ruta_volver1')}}" class="cerrar" id="cerrar">Volver</a>
        </section>

        <form id="formulario" method="POST" action="{{ route('ruta_actualizar') }}" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="usuario_id" id="nombre" value="{{ $id_usuario }}" class="">
        <input type="hidden" name="ide" id="ide" value="{{ $permiso_id }}" class="">
        <input type="hidden" name="cargo_id" id="nombre" value="{{ $id_cargo }}" class="">
        <br>

        <label name="titulo" id="titulo" class="textos"><h5> Estado de permiso:</h5></label><br>
        <input type="text" id="" name="" value="{{ $actualizar->estado_solicitud }}" readonly><br><br>
                            <br>



        <label name="titulo" id="titulo" class="textos"><h5> Seleccione el tipo de permiso:</h5></label><br>
        <input type="text" id="p_c_l" name="p_c_l" value="{{ $actualizar->p_c_l }}" readonly><br><br>
                            <br>

    
        <h5 name="titulo" id="titulo"class="textos" > Desde:</h5>
        <div>
        <input type="text" id="hora_inicio" name="hora_inicio" value="{{ $actualizar->hora_inicio}}" readonly><br><br>
        <h5 name="titulo" id="titulo"class="textos" > Hasta:</h5>
        <input type="text" id="hora_fin" name="hora_fin" value="{{ $actualizar->hora_fin}}" readonly><br><br>
        </div>
        <br><br>

        <h5 name="titulo" id="titulo"class="textos" > Información del permiso</h5>
        <input type="text" id="permiso" name="permiso" value="{{ $actualizar->info_permiso}}" readonly><br><br>


        <h5 name="nombreApellido" id="nombreApellido"class="textos" >Firmado por el empleado: </h5>
        <img src="{{ asset('image_e/' . $actualizar->firma_empleado) }}" class="img" /><br><br>

                <h5 name="nombreApellido" id="nombreApellido"class="textos"> Remunerado</h5>
                <input type="radio" id="op1" name="adicional" value="Si">
                <label for="op1">Si</label><br>
                <input type="radio" id="op2" name="adicional" value="No">
                <label for="op2">No</label><br><br>

                <h5 name="titulo" id="titulo"class="textos" > Observaciones</h5>
                <input type="text" class="" id="observaciones" name="observaciones" placeholder="Justificar: Opcional" ><br><br>

                <h5 name="nombreApellido" id="nombreApellido"class="textos" >Firma de jefe inmediato.</h5>
                <input type="file" class="" id="firma_jefe" name="firma_jefe" placeholder="Firma" required><br><br>

                
                <h5 name="nombreApellido" id="nombreApellido"class="textos" >Firma de Talento Humano.</h5>
                <button class="btn-lg boton primary" type="button" name="firma_th" id="firma_th">Firmar</button><br><br>

                <div class="boton">
                <button class="btn-lg boton primary" type="submit" name="submit_action" value="prevista" id="button1">Pre-vista</button>
                            <br><br>

                <button class="btn-lg boton primary" type="submit" name="submit_action" value="aprovar" id="button2">Aprobar</button>
                <br><br>

                <button class="btn-lg boton primary" type="submit" name="submit_action" value="rechazar" id="button3">Rechazar</button>
                            <br><br>
<!--                       
                <button class="btn-lg boton primary" type="submit" name="submit_action" value="firmar" id="button1">Firmar</button>
                <button class="btn-lg boton primary" type="submit" name="submit_action" value="prevista" id="button2">Pre-vista</button>   -->              <br><br><br><br>


                </div>

        </form>


</body>
</html>