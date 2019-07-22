@extends('layouts.app')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="card">
        <div class="card-header">
                <h2 class="text-center"> Actualizar Datos</h2>               
            </div> 

            <div class="card-body">
            <p class="text-center">Compartenos tus datos de para contactarnos contigo</p>
            <form method="post">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                @foreach($errors->all() as $errors)
                    <p class="alert alert-danger">{{$errors}}</p>
                @endforeach
                    
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                    <fieldset>
                    <div class="form-group">
                        <label for="identificacion" class="bmd-label-floating" style="color: #6a6a6a;">Identificación</label>
                        @if($userdatos == null)
                        <input type="number" class="form-control" id="identificacion"  name="identificacion" aria-describedby="identificacionHelp">
                        @else
                        <input type="number" class="form-control" id="identificacion"  value="{!!  $userdatos->identificacion !!}" name="identificacion" aria-describedby="identificacionHelp">
                        @endif
                        <span class="bmd-help">Escribe tu numero de cedula</span>
                    </div> 
                    <div class="form-group">
                        <label for="telefono" class="bmd-label-floating" style="color: #6a6a6a;" >Teléfono</label>
                        @if($userdatos == null)
                        <input type="tel" class="form-control" id="telefono" name="telefono" aria-describedby="celularHelp">
                        @else
                        <input type="tel" class="form-control" id="telefono" value="{!!  $userdatos->telefono !!}" name="telefono" aria-describedby="celularHelp">
                        @endif
                        <span class="bmd-help">Escribe tu numero de Ceular</span>
                    </div>  
                    <div class="form-group">
                        <label for="direccion" class="bmd-label-floating" style="color: #6a6a6a;">Dirección</label>
                        @if($userdatos == null)
                        <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="direccionHelp">                        
                        @else
                        <input type="text" class="form-control" id="direccion" value="{!!  $userdatos->direccion !!}" name="direccion" aria-describedby="direccionHelp">
                        @endif
                        <span class="bmd-help">Escribe tu direccion seguido del barrio</span>
                    </div>                                                      
                    <div class="form-group">                                                
                        <button type="submit" class="btn btn-raised btn-primary" style="background-color: #0e457b;">Actualizar</button>                        
                    </div>
                </fieldset>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection