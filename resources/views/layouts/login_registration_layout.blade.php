<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>naynaTube</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body class="pt-0">

    <div class="container-Fluid d-flex align-items-center orange_bg" style="padding-left:15px; padding-right:15px;">
        <img  class="m-auto" height="48" src="./img/nayna_logo.png"/>
    </div>


    @yield('content')

  <footer class="footer_setting">

  <div class="Fluid jumbotron bg-dark mb-0">

    <div class="text-center">
      <a class="p-2" href="/Over">About</a>
      <a class="p-2" href="/Vacatures">Jobs</a>
      <a class="p-2" href="/Privacy">Privacy</a>
      <a class="p-2" href="/Cookies">Cookies</a>
      <a class="p-2" href="/Gebruiksvoorwaarden">Terms of Use</a>
      <a class="p-2" href="/Help">Help</a>
      <a class="p-2" href="/Instellingen">Settings</a>
    </div>

    <div class="text-center">
      <a href="/rohnlicence">NaynaTube &copy;2018</a>
    </div>
    <div class="text-center">
      <a href="#" class="p-2">Tigrigna (TG)</a>
      <a href="#" class="p-2">English (US)</a>
    </div>

  </div>
  </footer>

        <script src="{{asset('js/app.js')}}" ></script>

    </body>
</html>
