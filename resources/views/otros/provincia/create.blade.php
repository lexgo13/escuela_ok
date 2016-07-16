    

  <!DOCTYPE html>
  <html>
  <head>
      <title></title>




  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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


<style>
 



</style>

  <div class="container" id="container_registro_provincia">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Register Provincia</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/provincia') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Nombre de la provincia</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">

                                  @if ($errors->has('nombre'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('nombre') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                   
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Rgistrar Provincia</button>
                                 <a href="{{ url('/home') }}" class="btn btn-info" role="button">Cancelar</a> 
                                </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>