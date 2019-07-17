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
                        <h2>Proceso</h2></li>                                            
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
                    <a class="btn btn-raised btn-primary" style="background-color: #0e457b;"href="{!! action('ProcesoController@procesoAdded',$proceso->id) !!}"> Agregar a mis procesos </a>                    
               </div>
            </div>                           
    </div>
</div>
@endsection