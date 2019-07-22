<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts <script src="{{ asset('js/app.js') }}" defer></script> -->
    

     <!-- Material Design for Bootstrap fonts and icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

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

	<script>
		window.Laravel = <?php echo json_encode([
			'csrfToken' =>csrf_token(),
			]);?>
	</script>             
                         
    <!-- Styles <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    
	@yield('css')
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #0e457b;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                                <a class="nav-link" href="{{ url('aboutus')}}">Quienes Somos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('forums')}}">Foro</a>
                            </li>   

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('help')}}">Ayuda</a>
                            </li>                             

                        @guest
                        

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else                         

                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Procesos Judiciales <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('misprocesos')}}">
                                    Mis Procesos
                                    </a>
                                    <a class="dropdown-item" href="{{ url('misprocesos/agregarproceso')}}">
                                       Agregar Proceso
                                    </a>                                   
                                </div>
                            </div>                                                   

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('actualizardatos')}}">
                                       Actualizar datos
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')	
        <footer class="container" >
        <br/>
      <br/>
      <br/>
      <br/>
      <hr class="featurette-divider">
    <div class="text-center center-block">
      <h2 class="txt-railway" style="color: #0e457b;">Redes</h2>
      <a href="https://www.facebook.com/Asistente-Judicial-1211266365696878" target="_blank" class="fa fa-facebook"></a>
      <a href="https://www.youtube.com/channel/UCcVMG3lQbxmuUB08isxYbBA" target="_blank" class="fa fa-youtube"></a>
      <a href="https://www.instagram.com/asistentejudicial" target="_blank" class="fa fa-instagram"></a>
      <a href="emailto:miasistentejudicial@gmail.com" target="_blank" class="fa fa-google"></a>
      <a href="https://play.google.com/store/apps/details?id=com.SuecoApps.AsistenteJudicialApp" target="_blank" class="fa fa-android"></a>
  </div>
    <p class="float-right"><a href="#" style="color: #0e457b;">Back to top</a></p>
    <p> Asistente Judicial &middot; <a href="http://asistententejudicial.com/docs/Politicas%20de%20Privacidad.pdf" target="_blank" style="color: #0e457b;">Políticas</a> &middot; <a href="http://asistententejudicial.com/docs/Terminos%20y%20Condiciones%20Asistente%20Judicial.pdf" target="_blank" style="color: #0e457b;">Términos</a></p>
  </footer>		
        </main>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <script src="{{ asset('js/dropdown.js') }}"></script>       
	@yield('js')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')    
</body>
</html>
