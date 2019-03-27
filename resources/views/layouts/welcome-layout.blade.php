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

<div class="jumbotron">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/">naynaTube</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline m-auto input-group col-md-5">
          <input class="form-control mr-sm-2" type="search" placeholder="Search videos, music and images" aria-label="Search">

          <div class="input-group-append">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>

        </form>

         <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="/videos"><i class="fas fa-video mr-1"></i>Videos</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/music"><i class="fas fa-music mr-1"></i> Music</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/upload"><i class="fas fa-plus-square"></i> Upload</a>
           </li>

         </ul>

       </div>
    </nav>

    <div class="columen-layout">

        <div class="leftSideBar">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">My uploads</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">My play list</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">My subscription</a>
          </div>
        </div>

        <div class="mainSection">
          @yield('content')
        </div>

        <div class="rightSideBar">
          <h1>up next <i class="fas fa-toggle-on ml-1" data-toggle="toggle"></i></h1>
        </div>

    </div>

</div>

        <script src="{{asset('js/app.js')}}" ></script>

    </body>
</html>
