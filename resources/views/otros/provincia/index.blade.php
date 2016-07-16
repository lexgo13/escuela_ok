<!DOCTYPE html>
  <html>
  <head>
  <title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Mi hoja de estilos -->
<link rel="stylesheet" href="css/escuela.css">

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
        <a class="navbar-brand" href="/home">Escuela</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        </ul>
     
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sesion <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ url('/logout') }}">Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<h3>Lista de todas las Provincias</h3>

<a href="{{ route('provincia.create') }}"  class="btn btn-success btn-bg" id="agregarProvincia"> Nueva Provincia</a>

<div class="container" id="contedorProvincias">
  <table class="table" id="contedorTabla">
    <thead>
      <tr>  <h2>  Nombre de Provincia </h2> </tr>
    </thead>
    <tbody>
        @foreach($provinciass as $prov)
          <tr>
            <td> {{$prov->nombre}} </td>          
            <td> 
              <div class="btn-group btn-group-sm">
                  <div class="btn-group">
                      <a href="{{ route('provincia.show', $prov->id ) }}" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Ver</a>
                   </div>   
                  <div class="btn-group">
                      <a href="{{ route('provincia.edit', $prov->id ) }}" class="btn btn-default btn-sm">Edit</a>
                    </div>
                  <div class="btn-group">
                      {!! Form::open(['route' => ['provincia.destroy', $prov->id], 'method' => 'DELETE']) !!}
                      {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
                      {!! Form::close() !!}
                    </div>
                </div> <!-- div del grupo principal -->
            </td>
          </tr>
        @endforeach   
    </tbody>    
  </table>
      <div  id="container_links_provincia">
    {{$provinciass->links()}}
      
   <a href="/home" class="btn btn-primary btn-md" id="botonSalir"> Salir</a>
      </div> 
</div>
 
      
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  
    <!-- Modal HTML -->
    <div id="myModal" class="modal" tabindex="" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->

            </div>
        </div>
    </div>
</div>

<footer class="footer" id="footer_index">
  <div class="container">
    <p class="text-muted text-center">Copyright© alexander magno </p>
  </div>
</footer>

</body>
</html>




