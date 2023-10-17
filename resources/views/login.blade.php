@extends('herencia.father')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="{{ asset('img/favicon.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <title>Inicio de sesión</title>

    </head>

    <body>
        <!--container login-->
        <div class="container-sm">
            <form  action="{{ route('ruta_login') }}" method="POST">
                @csrf
                    <div class="boton">
                        <!--login-->
                        <h2 name="inicio" id="inicio">Inicio de sesiòn</h2>
                    </div>
                    <br>
                    <h4 name="email" id="email">Email</h4>
                    <input type="email" class=" form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="example@example.com">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <br>
                    <br>
                    <h4 name="password" id="password">Password</h4>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="********">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <br>
                    <br>
                    <div class="boton">
                        <button class="btn btn-lg btn-primary" type="submit">Sign in</button>
                    </div>
                    <br>
                    <p>¿Aùn no tienes una cuenta? puedes registrarse <a href="register">aquì</a></p>
            </form>
        </div>
    </body>     
</html>