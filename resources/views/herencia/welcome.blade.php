<!-- master template of principal page-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="icon" href="{{ asset('img/favicon.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">

    <title>Bienvenido</title>
    
    </head>

    <body class="body">
        <!--custom navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/welcome') }}" class="navbar-brand text-sm text-gray-700 dark:text-gray-500 underline">Bienvenido</a>
        @else
            <a href="{{ route('login') }}" class="navbar-brand text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="navbar-brand ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
        @endif
        @endauth
        @endif
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pagina1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pagina2</a>
        </li>

      </ul>
      <form class="d-flex" role="search" action="{{ url('logout') }}" method="POST">
        <button class="form-control me-2 d-grid gap-2 col-6 mx-auto btn btn-outline-success" type="submit">Cerrar sesión</button>
        @csrf
      </form>
        
    </div>
  </div>
</nav>

    <footer>
        <div class="boton">
            <p class="mt-5 mb-3 text-muted">&copy; 2023–2025</p>
        </div>
    </footer>
    @yield('content')
    </body>
</html>