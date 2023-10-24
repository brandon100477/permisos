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
<body>
        <section class="inicio">
            <h2>Dilegenciar permiso</h2>
            <a href="{{ route('ruta_volver')}}" class="cerrar" id="cerrar">Volver</a>
        </section>

        <form id="formulario" method="POST" action="{{ route('ruta_firmar') }}" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="usuario_id" id="nombre" value="{{ $id_usuario }}" class="">
        <input type="hidden" name="cargo_id" id="nombre" value="{{ $id_cargo }}" class="">
        <br>

        <label name="titulo" id="titulo" class="textos"><h5> Estado de permiso:</h5></label><br>
                            <select type="submit" id="estado" name="estado" class="select" value="" >	
                                <option selected readonly value="">Seleccione una categoria</option>
                                <option value="Pendiente">Pendiente</option>
                                <option value="Rechazada">Rechazada</option>
                                <option value="Aprovada">Aprovada</option>
                            </select>
                            <br>
                            <br>


        <label name="titulo" id="titulo" class="textos"><h5> Seleccione el tipo de permiso:</h5></label><br>
                            <select type="submit" id="pcl" name="pcl" class="select" value="">	
                                <option selected readonly value="">Seleccione una categoria</option>
                                <option value="Permiso">Permiso</option>
                                <option value="Compensatorio">Compensatorio</option>
                                <option value="Licencia">Licencia</option>
                            </select>
                            <br>
                            <br>
    
        <h5 name="titulo" id="titulo"class="textos" > Hora o Fecha del permiso</h5>
        <div>

        
        <input type="radio" id="horas" name="tiempo" value="Horas">
        <label for="horas">Horas</label><br>
        <input type="radio" id="dias" name="tiempo" value="Dias">
        <label for="dias">Días</label>

        </div>

        <p>De <input name="hora_inicio" type="time" > a <input name="hora_fin" type="time"></p>
        <p>Días contados desde la fecha hasta: <input  type="text"  name="dias" placeholder="N días"></p>
        <br><br>

        <div>


        <h5 name="titulo" id="titulo"class="textos" > Información del permiso</h5>
        <input type="radio" id="opcion1" name="permiso" value="Dia de la familia" required>
        <label for="opcion1">Día de la Familia</label><br>
        <input type="radio" id="opcion2" name="permiso" value="Otro">
        <label for="opcion2">Otro: <input type="text" class="" id="justificado" name="justificado" placeholder="Justificar: Día de cumpleaños" ></label><br>
        </div>

                <label for="nombreApellido"></label><br><br>

                <h5 name="nombreApellido" id="nombreApellido"class="textos" >Firma del empleado.</h5>
                <input type="file" class="" id="firma_e" name="firma_e" required><br><br>


                <h5 name="nombreApellido" id="nombreApellido"class="textos" > Remunerado</h5>
                <input type="radio" id="op1" name="adicional" value="Si">
                <label for="op1">Si</label><br>
                <input type="radio" id="op2" name="adicional" value="No">
                <label for="op2">No</label><br><br>

                <h5 name="titulo" id="titulo"class="textos" > Observaciones</h5>
                <input type="text" class="" id="observaciones" name="observaciones" placeholder="Justificar: Opcional" ><br><br>

                <h5 name="nombreApellido" id="nombreApellido"class="textos" >Firma de jefe inmediato.</h5>
                <input type="file" class="" id="firma_jefe" name="firma_jefe" placeholder="Firma" ><br><br>

                <h5 name="nombreApellido" id="nombreApellido"class="textos" >Firma de Talento Humano.</h5>
                <input type="file" class="" id="firma_th" name="firma_th" placeholder="Firma" ><br><br>

                <div class="boton">
                    
                <button class="btn-lg boton primary" type="submit" name="submit_action" value="firmar" id="button1">Firmar</button>
                <button class="btn-lg boton primary" type="submit" name="submit_action" value="prevista" id="button2">Pre-vista</button>                <br><br><br><br>

                <!-- <button class="btn-lg boton primary" type="submit" name="button1" id="button1">Pre-vista</button>
                    <button type="button" name="button2" id="button2" action="{{ route('ruta_firmar') }}">Firmar</button> -->

                </div>

        </form>


</body>
<!-- <script>
function enviarFormulario(boton, accion) {
    // Obtener los datos del formulario
    var datos = new FormData(document.querySelector('#formulario'));

    // Redirigir a la URL configurada en el botón
    window.location.href = accion;
}

</script> -->
</html>