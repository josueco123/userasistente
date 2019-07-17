@extends('layouts.app')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">        
            <div class="card">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="card-header">
                
                <ul class="nav nav-pills card-header-pills justify-content-between">
                    <li class="nav-item"><h2 class="text-center">Proceso</h2></li>
                    <li class="nav-item"> 
                        <div class="btn-group">
                            <button class="btn bmd-btn-fab bmd-btn-fab-sm dropdown-toggle" type="button" id="ex3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="ex3">
                                <a class="dropdown-item" href="{!! action('ProcesoController@edit',$proceso->id) !!}">Editar</a>
                                <a class="dropdown-item" href="#">Solicitar Auto</a>
                                <a class="dropdown-item" href="{!! action('ProcesoController@quitarProceso',$proceso->id) !!}">Quitar</a>
                            </div>
                        </div>
                    </li>
                                                                     
                </ul>
                </div>
                <div class="card-body">
                                    
                    <p> <strong> Radicación </strong></p>
                    <p>{!! $proceso->radicacion !!}</p>
                    <p> <strong> Juzgado </strong></p>
                    <p>{!! $proceso->juzgado !!}</p>
                    <p > <strong> Demandante </strong></p>
                    <p>{!! $proceso->demandante !!}</p>
                    <p> <strong> Demandado </strong></p>
                    <p>{!! $proceso->demandado !!}</p>                    
               </div>
            </div>                
            <div class="card">
                <div class="card-header"><h2>Estados</h2></div>
                <div class="card-body">
                                    
                @if ($estados->isEmpty())
                    <p> No hay Estados.</p>
                @else
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Descripcion</th>                                                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($estados as $estado)
                                <tr>                                    
                                    <td>{!! $estado->fecha !!}</td>
                                    <td>{!! $estado->descripcion  !!}</td>                                                            
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                @endif               
               </div>
               <div class="card">
                <div class="card-header"><h2>Agregar Estado</h2></div>
                <div class="card-body">
                <form  action="" method="post">
                
                @foreach($errors->all() as $errors)
                <p class="alert alert-danger">{{$errors}}</p>
                 @endforeach

                 
                 <fieldset>                   
                                            
                        <div class="form-group">
                            <label for="fecha">Fecha</label>                            
                            <input type="date" class="form-control" id="fecha" placeholder="" name="fecha">
                        </div>
                      

                        <div class="form-group">
                            <label for="descripcion" class="bmd-label-floating" style="color: #6a6a6a;" >Descripcion</label>
                            <input class="form-control" id="descripcion" name="descripcion">                            
    
                        </div>

                        <div class="form-group">
                            <input type="hidden" id="proceso_id" name="proceso_id" value="{!!  $proceso->id; !!}">
                            <input type="hidden" name="_token" value="{!! csrf_token()!!}">                            
                            <button type="submit" class="btn btn-raised btn-primary" style="background-color: #0e457b;">Agregar</button>
                        </div>

                        
                    
                </fieldset>
                 </form>             
                
                    </div>                          
               </div>
               
        </div>
    </div>
</div>
@endsection