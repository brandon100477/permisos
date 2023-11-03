<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    <title>Document</title>
    @vite(['resources/css/login.css','resources/js/login.js'])
</head>

<body>
  <div class="wrapper">
  <form class="login">
    <p class="title">Log in</p>
    <input type="text" placeholder="Username">
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password">
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button>
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  <footer><a target="blank" href="http://boudra.me/">boudra.me</a></footer>
  <p></p>
</div>
  


</body>
</html>