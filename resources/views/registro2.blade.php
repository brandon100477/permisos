
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Solo se debe registrar personal con autorización, desde la pagina de inicio no se debería registrar.-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="{{ asset('img/favicon.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('../../css/registro.css')}}">

        <title>Registrar</title>

    </head>

    <body>
        <!--CSS: container register-->
        <div class="container">
            <form action="{{ route('ruta_principal') }}" method="POST">
            @csrf <!--Este metodo ayuda a que los datos del formulario se puedan enviar -->
                <div class="boton">
                    <!--registro de datos a la db: solicitud / tabla: usuario-->
                    <h2 name="regis" id="regis" class="texto_inicio">Registrar Cargo</h2>
                </div><br>

                <label name="personas" id="personas" class="textos"><h5>Profesionales de la empresa:</h5></label><br>
                            <select type="submit" id="personas" name="personas" class="select" value="" required>	
                                @foreach ($personas as $persona)
                                <option value="{{ $persona->id }}"> {{ $persona->nombre }}
                                @endforeach
                            </select>
                            <br> 
                            <br>


                <label name="empresa" id="empresa" class="textos"><h5>Empresa:</h5></label><br>
                            <select type="submit" id="empresa" name="empresa" class="select" value="" required>	
                                <option selected readonly value="">Seleccione una categoria</option>
                                <option value="1">Cedicaf</option>
                                <option value="2">Radiologos Asociados</option>
                            </select>
                            <br> 
                            <br>

                <label name="area" id="area" class="textos"><h5>Area:</h5></label><br>
                            <select type="submit" id="area" name="area" class="select" value="" required>	
                                <option selected readonly value="">Seleccione un area</option>
                                <option value="1">Asistencial</option>
                                <option value="2">TI (Sistemas)</option>
                                <option value="3">Talento Humano</option>
                                <option value="4">Contabilidad</option>
                                <option value="5">Cartera</option>
                                <option value="6">Administrativa</option>
                                <option value="7">Facturación</option>
                                <option value="8">Comercial</option>
                                <option value="9">Planeación</option>
                                <option value="10">Servicio al cliente</option>
                                <option value="11">Sistema Integrado de gestión (Calidad)</option>
                                <option value="12">Gerencia médica</option>
                            </select>
                            <br> 
                            <br> 

                <h5 name="cargo" id="cargo"class="textos" >3. Cargo: </h5>
                <input type="text" class=" form-control @error('cargo') is-invalid @enderror" name="cargo" id="cargo" placeholder="Respuesta: " required>
                <label for="cargo"></label>
                @error('cargo')
                {{ $message }}
                @enderror
                <br>

                <div class="boton">
                    <button class="btn-lg boton primary" type="submit" name="button1" id="button1">Registrarse</button>
                </div>
            </form>
        </div>
        <br>
    </body>
</html>