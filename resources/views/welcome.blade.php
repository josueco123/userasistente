<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Asistente Judicial</title>

        
     
        <link href="css/carousel.css" rel="stylesheet">
     
        <!-- Material Design for Bootstrap CSS -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style type="text/css">
          .fa {
              padding: 20px;
              font-size: 30px;
              width: 30px;
              text-align: center;
              text-decoration: none;
              margin: 5px 2px;
              border-radius: 50%;
              color: #0e457b;
            }    
         
        </style>  
        
    </head>
    <header>
    <body >
    <nav class="navbar navbar-expand-md navbar-dark fixed-top "style="background-color: #0e457b;">
    <a class="navbar-brand" href="#">Asistente Judicial</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">  
    <ul class="navbar-nav mr-auto">
    </ul>    
    <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))               
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Inicio</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Acceder</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registro</a>
                            </li>
                        @endif
                    @endauth
                </div>
            @endif
        </ul>
    </div>
  </nav>
  </header>
<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
    
      <div class="carousel-item active">
        <img src="{{ asset('img/prueba.png') }}" >
        <!--{% include icons/placeholder.svg width="100%" height="100%" background="#777" color="#777" text=" " title=" " %}-->
          <div class="container"> 
            <div class="carousel-caption text-left">  
              <h1 style="color: #0e457b;" class="font-weight-bold" >Recibe Notificaciones de tus</h1>
              <h1 style="color: #0e457b;" class="font-weight-bold">Procesos Judiciales en tu Celular.</h1>
              <h1 style="color: #0e457b;" class="font-weight-bold">Por tan solo 2mil pesos</h1>                               
                <p><a class="btn btn-raised btn-primary" style="background-color: #0e457b;" href="https://play.google.com/store/apps/details?id=com.SuecoApps.AsistenteJudicialApp" target="_blank" role="button">Descarga la App</a></p>
            </div>         
          </div>
      </div>

      <div class="carousel-item">
       <img src="{{ asset('img/prueba2.png') }}" >   
        <div class="container"> 
          <div class="carousel-caption text-right">  
            <h1 style="color: #0e457b;" class="font-weight-bold" >¡Registra tus Procesos!</h1>
            <h1 style="color: #0e457b;" class="font-weight-bold">Prueba Gratis el Primer Mes</h1>                              
                <p><a class="btn btn-raised btn-primary" style="background-color: #0e457b;" href="{{ route('register') }}" role="button">Registrate</a></p>
            </div>         
          </div>     
      </div>

      <div class="carousel-item">
        <img src="{{ asset('img/prueba3.png') }}"   >
              <!-- {% include icons/placeholder.svg width="100%" height="100%" background="#777" color="#777" text=" " title=" " %}-->        
        <div class="container"> 
          <div class="carousel-caption ">              
          <h1 style="color: #0e457b;" class="font-weight-bold">Comparte y Discute sobre temas Judicales</h1> 
            <h1 style="color: #0e457b;" class="font-weight-bold">¡Usa nuestro Foro!</h1>                              
                <p><a class="btn btn-raised btn-primary" style="background-color: #0e457b;" href="{{ url('forums')}}" role="button">Foro</a></p>
          </div>         
        </div>        
      </div>     
      
      
      <div class="carousel-item">
        <img src="{{ asset('img/prueba2.png') }}"  >
       <!-- {% include icons/placeholder.svg width="100%" height="100%" background="#777" color="#777" text=" " title=" " %}-->        
        <div class="container"> 
          <div class="carousel-caption text-right">  
            <h1 style="color: #0e457b;" class="font-weight-bold" >Si lo Deseas puedes</h1>
            <h1 style="color: #0e457b;" class="font-weight-bold">Solicitar el Auto Reciente</h1>                              
                <p><a class="btn btn-raised btn-primary" style="background-color: #0e457b;" href="{{ route('register') }}" role="button">Registrate</a></p>
          </div>         
        </div>   
      </div>

    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

        <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
    <!-- START THE FEATURETTES -->

   
    <div class="card border-primary mb-3" style="max-width: 80rem;">
  <div class="card-body">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¡Obten descuentos! <span class="text-muted">Registra más de 30 procesos.</span></h2>
        <p class="lead">Si tienes una gran cantidad de procesos por revisar, agrégalos a nuestro sistema y ajustaremos un precio justo para ti.  </p>
        <a href="{{ route('register') }}" ><h5 style="color: #0e457b;">Ver más</h5></a> <br/>
      </div>
      <div class="col-md-5">
        <!--{% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}-->
        <br/>
      <br/>
        <img src="{{ asset('img/promociones.jpg') }}" width="400" height="258" >
      </div>
    </div>
    </div>
    </div>
    
    <div class="card border-primary mb-3" style="max-width: 80rem;">
  <div class="card-body">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">¿Tienes dudas sobre algún procedimiento judicial? <span class="text-muted">Déjanos ayudarte.</span></h2>
        <p class="lead">Diseñamos un foro en el cual puedes socializar tus dudas según el tema en que necesite apoyo, también puedes ayudar a otros compartiendo tu conocimiento y experiencia. </p>
        <a href="{{ url('forums')}}" ><h5 style="color: #0e457b;">Ver más</h5></a> <br/>
      </div>
      <div class="col-md-5 order-md-1">
      <br/>
      <br/>
      <br/>
      <img src="{{ asset('img/foros.jpg') }}" width="300" height="300" >
      </div>
    </div>
    </div>
    </div>
    
    <div class="card">
  <div class="card-body">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Agrega tus Procesos <span class="text-muted">Prueba Gratis el primer mes.</span></h2>
        <p class="lead">Te damos la posibilidad de conocer nuestro servicios y usarlos gratuitamente por el primer mes  </p>
        <a href="https://play.google.com/store/apps/details?id=com.SuecoApps.AsistenteJudicialApp" target="_blank" ><h5 style="color: #0e457b;">Ver más</h5></a> <br/>
      </div>
      <div class="col-md-5">
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
        <img src="{{ asset('img/google.png') }}" width="300" height="116">
        <!--  {% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %} -->
      </div>
    </div>
    </div>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container" >
    <div class="text-center center-block">
      <h2 class="txt-railway" style="color: #0e457b;">Redes</h2>
      <a href="https://www.facebook.com/Asistente-Judicial-1211266365696878" target="_blank" class="fa fa-facebook"></a>
      <a href="https://www.youtube.com/channel/UCcVMG3lQbxmuUB08isxYbBA" target="_blank" class="fa fa-youtube"></a>
      <a href="https://www.instagram.com/asistentejudicial" target="_blank" class="fa fa-instagram"></a>
      <a href="emailto:miasistentejudicial@gmail.com" target="_blank" class="fa fa-google"></a>
      <a href="https://play.google.com/store/apps/details?id=com.SuecoApps.AsistenteJudicialApp" target="_blank" class="fa fa-android"></a>

  </div>
    <p class="float-right"><a href="#" style="color: #0e457b;">Back to top</a></p>
    <p> Asistente Judicial &middot; <a href="#" style="color: #0e457b;">Políticas</a> &middot; <a href="#" style="color: #0e457b;">Términos</a></p>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    </main>
    </body>    
</html>
