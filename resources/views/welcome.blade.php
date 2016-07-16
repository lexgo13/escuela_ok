<!DOCTYPE html>
<html class = "full" id="welcome_full_class">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Mi hoja de estilos -->
<link rel="stylesheet" href="css/escuela.css">

<style>
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 0px solid transparent;
    }
  </style>

</head>
<body>
  <nav class="navbar navbar-default" id="navbar_default_welcome">
    <div class="container-fluid" id="container_fluid_welcome">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="b.png" id="la_e">
        </a>
      </div>
    </div>
  </nav>

  <div class="jumbotron" id="jumbo">
    <h1 style="color:white;">Bienvenido al Sistema Escuela!</h1>

    <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc nibh, vulputate a interdum eu, fermentum vel dolor. Cras et ligula at eros gravida tempor nec ut nunc. Vivamus posuere id tellus at aliquet. In eros erat, ornare eget leo nec, viverra porttitor ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas a nisl sit amet est finibus accumsan non ut nisi. Etiam in magna mattis, cursus mauris eu, luctus risus. Nulla ultrices pretium erat ut placerat. Nulla tellus ex, euismod ac consequat in, lobortis ut felis. Suspendisse quis porta lacus.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc nibh, vulputate a interdum eu, fermentum vel dolor. Cras et ligula at eros gravida tempor nec ut nunc. Vivamus posuere id tellus at aliquet. In eros erat, ornare eget leo nec, viverra porttitor ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas a nisl sit amet est finibus accumsan non ut nisi. Etiam in magna mattis, cursus mauris eu, luctus risus. Nulla ultrices pretium erat ut placerat. Nulla tellus ex, euismod ac consequat in, lobortis ut felis. Suspendisse quis porta lacus.
    </p>

      <!--Botones de Usuarios-------------------------->
<div class="btn-group">
  <p style="color:white;">
    Usuarios
  </p>

    <div class="btn-group" role="group" aria-label="...">
       <a href="{{ url('/login') }}" class="btn btn-info" role="button">Login</a>
   </div>

   <div class="btn-group" role="group" aria-label="...">
      <a href="{{ url('/register') }}" class="btn btn-info" role="button">Register</a>
  </div>
</div>
  <!--Botones de Administradores-------------------------->
  <div class="btn-group">
    <p style="color:white;">
      Admin
    </p>

    <div class="btn-group" role="group" aria-label="...">
     <a href="{{ url('adminn') }}" class="btn btn-info" role="button">Login</a>
    </div>

     <div class="btn-group" role="group" aria-label="...">
        <a href="{{ url('admin/create') }}" class="btn btn-info" role="button">Register (TODAVIA REGISTRA USUARIOS COMUNES)</a>
    </div>
</div>


</div>    <!--Fin div de jumbotron-->


<footer class="footer" id="footer_welcome">
  <div class="container">
    <p class="text-muted text-center">Copyright© alexander magno </p>
  </div>
</footer>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
