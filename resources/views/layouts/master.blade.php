  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Home|@yield('title')</title>
      {!!Html::style('assets/css/bootstrap.css')!!}
    	{!!Html::style('assets/css/estilos.css')!!}
      {!!Html::style('assets/css/font-awesome.css')!!}
      {!!Html::script('assets/js/jquery.js')!!}

      <style>
          body {
              font-family: 'Lato';
          }
          .fa-btn {
              margin-right: 6px;
          }
      </style>
    </head>
    <body id="app-layout">
       <!-- Fixed navbar -->
      <nav class="navbar navbar-inverse ">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/dashboards') }}"> <img src="../assets/css/imagenes/fondo//logo.png" alt=""/> </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!-- <a class="navbar-brand" href="{{ url('/') }}">AppMark</a> -->
              <li class="active"><a href="/dashboards">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/product/create')}}">Registrar Productos</a></li>
                      <div class="divider">
                  </div>
                  <li><a href="{{ url('/product')}}">Listar Productos</a></li>
                      <div class="divider">
                </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Marcas<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="">Registrar Marcas</a></li>
                     <div class="divider"></div>
                 <li><a href="{{ url('/product')}}">Listar Marcas</a></li>
                     <div class="divider"></div>
               </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('usuarios/usuarios')}}">Registrar Usuarios</a></li>
                    <div class="divider"></div>
              </ul>
           </li>
           </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <div class="divider"></div>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <div class="container">
        @yield('content')
      </div> <!-- /container -->

      <footer class="footer">
        <center>
           <smal>Derechos reservados</small>
        </center>
      </footer>
      {!!Html::script('assets/js/jquery.js')!!}
    	{!!Html::script('assets/js/bootstrap.min.js')!!}
      </body>
  </html>
