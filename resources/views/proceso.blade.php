@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="card-header"><h2>Procesos</h2></div>
                <div class="card-body">
                                    
                    <p> <strong> Radiccación </strong></p>
                    <p>{!! $proceso->radicacion !!}</p>
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
                <form  action="{!! action('EstadoController@store') !!}" method="post">
                
                @foreach($errors->all() as $errors)
                <p class="alert alert-danger">{{$errors}}</p>
                 @endforeach

                 
                 <fieldset>                   
                                            
                        <div class="form-group">
                            <label for="fecha" >Fecha</label>                            
                            <input type="date" class="form-control" id="fecha" placeholder="" name="fecha">
                        </div>
                      

                        <div class="form-group">
                            <label for="descripcion" >Descripcion</label>
                            <input class="form-control" id="descripcion" name="descripcion">                            
    
                        </div>

                        <div class="form-group">
                            <input type="hidden" id="proceso_id" name="proceso_id" value="{!!  $proceso->id; !!}">
                            <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                        
                    
                </fieldset>
                 </form>             
                
                    </div>                          
               </div>
               
        </div>
    </div>
</div>
@endsection