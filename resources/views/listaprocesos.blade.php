@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><h2>Procesos</h2>    
            </div>
                <div class="card-body">               

                @if ($procesos->isEmpty())
                    <p> No tienies procesos agregado.</p>
                @else
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Radicacion</th>
                                <th>Juzgado</th>
                                <th>Demandante</th>   
                                <th>Demandado</th>                                                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($procesos as $proceso)
                                <tr>                                    
                                    <td><a class="btn btn-primary" href="{!! action('ProcesoController@show',$proceso->id) !!}" >{!! $proceso->radicacion !!}</a></td>
                                    <td>{!! $proceso->juzgado  !!}</td> 
                                    <td>{!! $proceso->demandante  !!}</td>     
                                    <td>{!! $proceso->demandado  !!}</td>                                                                
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
</div>
@endsection