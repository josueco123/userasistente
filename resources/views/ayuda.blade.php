@extends('layouts.app')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
<div class="card text-center">
  <div class="card-header">
  <h2 class="text-center"> Ayuda</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">Revisa nuestras guías</h5> 
    <a href="{{ url('help/register')}}" style="color: #0e457b;" ><h6 >Registrarse</h6></a> <br/>  
    <a href="{{ url('help/data')}}" style="color: #0e457b;" ><h6 >Actualizar Datos</h6></a> <br/>    
       <a href="{{ url('help/proceso')}}" style="color: #0e457b;" ><h6 >Agregar Proceso</h6></a> <br/>
        <a href="{{ url('help/procesoauto')}}" style="color: #0e457b;"><h6 >Solicitar Auto</h6></a><br/>
       <a href="{{ url('help/pagos')}}" style="color: #0e457b;"> <h6 >Realizar Pagos</h6></a>
    
  </div>  
</div>
</div>
</div>
@endsection