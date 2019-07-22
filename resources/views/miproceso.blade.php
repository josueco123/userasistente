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
        </div>
    </div>
</div>
@endsection