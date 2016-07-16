<!DOCTYPE html>
<html class="full">
<head>
<title>Página Principal de la Escuela</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Escuela</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumnos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="alumnos_registro">Registrar Alumno</a></li>
            <li><a href="#">Ver Consultas</a></li>
            <li><a href="#">Ver Consultas</a></li>
          </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profesores <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ver Profesores</a></li>
            <li><a href="#">Realizar Consultas</a></li>
            <li><a href="#">Otros</a></li>
          </ul>
        </li>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prenscripciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nueva Preinscripción</a></li>
            <li><a href="#">Pagos</a></li>
            <li><a href="#">Something else here</a></li>
          </ul>
        </li>

         </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sesion <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">{{ Auth::User()->name }}</a></li>
            <li><a href="#">Another action</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ url('/logout') }}">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <h1  >Bienvenidos Padres</h1>

<style>
    footer {
      background-color: #f5f5f5;
      width: 100%;
      height: 50px;
      bottom: 0px;
      margin:0 auto auto auto;
      position: absolute;
      border-top: 1px ;
    }


    .full {
      background: url(https://www.enfoque.global/wp-content/uploads/2015/09/leer-libros-8-9.png) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

</style>

<footer class="footer">
  <div class="container">
    <p class="text-muted text-center">Copyright© alexander magno </p>
  </div>
</footer>

</body>
</html>
