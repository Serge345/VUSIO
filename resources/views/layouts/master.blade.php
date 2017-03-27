<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VUSIO</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
});
  </script>

</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header blue darken-3">
        <a class="navbar-brand bold" href="{{url('/')}}">Vusio</a>
        <ul class="right hide-on-med-and-down">

        </ul>
      </div>
      <div class="nav navbar-nav navbar-right">

      </div>
    </div>
  </nav>



    <section>
      <!-- Espacio para los mensajes flash enviados entre solicitudes -->

@if(Session::has('flash_message'))
<blockquote>
    <article class="alert alert-success">
          {{ Session::get('flash_message') }}
    </article>
</blockquote>
@endif
        <!-- Espacio para el contenido de la página -->

        <article class="container">
          @if($errors->any())
              <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                      <p>{{ $error }}</p>
                  @endforeach
              </div>
          @endif
            @yield('content')
        </article>
    </section>
    <footer class="page-footer blue darken-4">
              <div class="container">
                <div class="row">
                  <div class="col l6 s12">
                    <h5 class="white-text">Acerca del sitio</h5>
                    <p class="grey-text text-lighten-4">Esta plataforma fue desarrollada para el control
                    de documentos entrantes al Hospital San Vicente de Paul de Fresno</p>
                  </div>
                  <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Acerca de nosotros</h5>
                    <ul>
                      <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/s3rg3th30ne">Sergio Salazar</a></li>
                      <li><a class="grey-text text-lighten-3" href="http://www.autonoma.edu.co/conoce-la-uam/informacion-institucional">Síguenos en facebook</a></li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer-copyright blue darken-3">
                <div class="container">
                © 2017 Copyright Sergio Salazar
                </div>
              </div>
            </footer>
</body>
</html>
