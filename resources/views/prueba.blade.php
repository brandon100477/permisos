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
    @vite(['resources/css/prueba.css'])
</head>

<body>
<form id="app-cover">
  <div id="select-box">
    <input type="checkbox" id="options-view-button">
    <div id="select-button" class="brd">
      <div id="selected-value">
        <span>Select a platform</span>
      </div>
      <div id="chevrons">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>
    <div id="options">
      <div class="option">
        <input class="s-c top" type="radio" name="platform" value="codepen">
        <input class="s-c bottom" type="radio" name="platform" value="codepen">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <span class="label">CodePen</span>
        <span class="opt-val">CodePen</span>
      </div>
      <div class="option">
        <input class="s-c top" type="radio" name="platform" value="dribbble">
        <input class="s-c bottom" type="radio" name="platform" value="dribbble">
        <i class="fab fa-dribbble"></i>
        <span class="label">Dribbble</span>
        <span class="opt-val">Dribbble</span>
      </div>
      <div class="option">
        <input class="s-c top" type="radio" name="platform" value="behance">
        <input class="s-c bottom" type="radio" name="platform" value="behance">
        <i class="fab fa-behance"></i>
        <span class="label">Behance</span>
        <span class="opt-val">Behance</span>
      </div>
      <div class="option">
        <input class="s-c top" type="radio" name="platform" value="hackerrank">
        <input class="s-c bottom" type="radio" name="platform" value="hackerrank">
        <i class="fab fa-hackerrank"></i>
        <span class="label">HackerRank</span>
        <span class="opt-val">HackerRank</span>
      </div>
      <div class="option">
        <input class="s-c top" type="radio" name="platform" value="stackoverflow">
        <input class="s-c bottom" type="radio" name="platform" value="stackoverflow">
        <i class="fab fa-stack-overflow"></i>
        <span class="label">StackOverflow</span>
        <span class="opt-val">StackOverflow</span>
      </div>
      <div class="option">
        <input class="s-c top" type="radio" name="platform" value="freecodecamp">
        <input class="s-c bottom" type="radio" name="platform" value="freecodecamp">
        <i class="fab fa-free-code-camp"></i>
        <span class="label">FreeCodeCamp</span>
        <span class="opt-val">FreeCodeCamp</span>
      </div>
      <div id="option-bg"></div>
    </div>
  </div>
</form>
</body>
</html>