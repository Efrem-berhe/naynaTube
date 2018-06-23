<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>educationrohn</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body class="pt-0">

    <div class="container d-flex align-items-center">
        <img  class="m-auto" height="48" src="./img/logo1.png"/>
        <div class="float-right">
          <a href="/register" class="mr-2 nav-item" style="color:black"><i class="fas fa-user-plus mr-1"></i> Sign up</a>
          <a href="/login" style="color:black"><i class="fas fa-sign-in-alt mr-1"></i> Sign in</a>
        </div>

    </div>

    <nav class="navbar navbar-dark navbar-expand-md bg-dark" role="navigation">

          <div class="container">
             <ul class="nav navbar-nav mx-auto">

               <li class="nav-item">
                 <a class="nav-link text-uppercase" href="/home">Home</a>
               </li>

               <li class="nav-item">
                 <a class="nav-link text-uppercase" href="/over">Over</a>
               </li>

               <li class="nav-item">
                 <a class="nav-link text-uppercase" href="/lesson">Lesson</a>
               </li>

               <li class="nav-item">
                 <a class="nav-link text-uppercase" href="/event">Event</a>
               </li>

               <li class="nav-item">
                 <a class="nav-link text-uppercase" href="/blog">Blog</a>
               </li>

             </ul>

        </div>

    </nav>

        @yield('content')

  <footer class="footer">
  <div class="Fluid jumbotron bg-light-dark mb-0">
    <div class="row">

      <div class="col-md-4 text-center">
        <img width="120" src="./img/kuleuven.png" />
      </div>

      <div class="col-md-4 text-center">
        <img width="120" src="./img/ablnbev.png" />
      </div>

      <div class="col-md-4 text-center">
        <img width="120" src="./img/telent.png" />
      </div>

    </div>
  </div>

  <div class="Fluid jumbotron bg-dark mb-0">

    <div class="text-center">
      <a class="p-2" href="/Over">Over</a>
      <a class="p-2" href="/Vacatures">Vacatures</a>
      <a class="p-2" href="/Privacy">Privacy</a>
      <a class="p-2" href="/Cookies">Cookies</a>
      <a class="p-2" href="/Gebruiksvoorwaarden">Gebruiksvoorwaarden</a>
      <a class="p-2" href="/Help">Help</a>
      <a class="p-2" href="/Instellingen">Instellingen</a>
    </div>

    <div class="text-center">
      <a href="/rohnlicence">EducationROHN &copy;2018</a>
    </div>
    <div class="text-center">
      <a href="#" class="p-2">Nederlands (België)</a>
      <a href="#" class="p-2">English (US)</a>
      <a href="#" class="p-2">Français (France)</a>
    </div>

  </div>
  </footer>

        <script src="{{asset('js/app.js')}}" ></script>

    </body>
</html>
