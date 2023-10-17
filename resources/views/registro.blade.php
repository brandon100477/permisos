
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
            <form action="{{ route('ruta_cargo') }}" method="POST">
            @csrf <!--Este metodo ayuda a que los datos del formulario se puedan enviar -->
                <div class="boton">
                    <!--registro de datos a la db: Visitador_medico / tabla: login_usuarios-->
                    <h2 name="regis" id="regis" class="texto_inicio">Registrar usuarios</h2>
                </div><br>

                <h5 name="nombreApellido" id="nombreApellido"class="textos" >1. Nombre y apellido</h5>
                <input type="text" class=" form-control @error('nombreApellido') is-invalid @enderror" value="{{ old('nombreApellido') }}" id="nombreApellido" name="nombreApellido" placeholder="Respuesta:" required>
                <label for="nombreApellido"></label>
                @error('nombreApellido')<!--Metodo para el manejo de errores -->
                {{ $message }}
                @enderror

                <h5 name="correo" id="correo"class="textos" >2. Correo electronico</h5>
                <input type="email" class=" form-control @error('correo') is-invalid @enderror" value="{{ old('correo') }}" id="correo" name="correo" placeholder="example@example.com" required>
                <label for="correo"></label>
                @error('correo')
                {{ $message }}
                @enderror
                <br>

                <h5 name="contrasena" id="contrasena"class="textos" >3. Contraseña</h5>
                <input type="password" class=" form-control @error('contrasena') is-invalid @enderror" name="contrasena" id="contrasena" placeholder="*******" required>
                <label for="contrasena"></label>
                @error('contrasena')
                {{ $message }}
                @enderror
                <br>

                <h5 name="cedula" id="cedula"class="textos" >4. Cedula</h5>
                <input type="number" class=" form-control @error('cedula') is-invalid @enderror" name="cedula" id="cedula" placeholder="Ej: 104527587" required>
                <label for="cedula"></label>
                @error('cedula')
                {{ $message }}
                @enderror
                <br>

                <div class="boton">
                    <button class="btn-lg boton primary" type="submit" name="button1" id="button1">Continuar</button>
                </div>
            </form>
        </div>
        <br>
    </body>
</html>