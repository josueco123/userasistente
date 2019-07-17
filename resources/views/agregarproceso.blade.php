@extends('layouts.app')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="card">
        <div class="card-header">
                <h2 class="text-center"> Agregar Proceso </h2>
            </div> 

            <div class="card-body">
            <p class="text-center">Agrega tus procesos para supervisión</p>
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
                        <label for="radicacion" class="bmd-label-floating" style="color: #6a6a6a;">Radicación</label>
                        <input type="text" class="form-control" id="radicacion" placeholder="" name="radicacion" aria-describedby="radicacionHelp">
                        <span class="bmd-help">Ingresa el año seguido al numero de proceso</span>
                    </div>                              
                    <div class="form-group">
                        <label for="tipojuzgado" class="bmd-label-floating">Juzgado</label>
                        <select class="form-control" id="tipojuzgado" name="tipojuzgado" >
                                <option value="">Seleciona el Juzgado</option>
                                <option value="1">Civiles Municipales</option>
                                <option value="2">Laborales</option>
                                <option value="3">Civiles Del Circuito</option>
                                <option value="4">Famila</option>
                                <option value="5">Tribunal Superior</option>
                                <option value="6">Pequeñas Causas Laborales</option>
                                <option value="7">Administrativos de Oralidad</option>
                                <option value="8">Civiles Municipales de Ejecucion</option>
                                <option value="9">Civiles Del Circuito de Ejecucion</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="juzgado" class="bmd-label-floating" >Selecione el Juzgado</label>
                        <select class="form-control" id="juzgado" name="juzgado">
                        </select>
    
                    </div>
                    <div class="form-group">                                                
                        <button type="submit" class="btn btn-raised btn-primary" style="background-color: #0e457b;">Agregar</button>                        
                    </div>
                </fieldset>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection