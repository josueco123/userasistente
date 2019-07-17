<?php

namespace App\Http\Controllers;

use App\Proceso;
use App\User;
use Auth;
use Alert;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $procesos = Proceso::all();
        echo utf8_encode(json_encode($procesos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agregarproceso');
    }

    public function email()
    {
        //
        $data = array(
            'name'  => "Josue",
            'tipe' => "user",
        );
        return view('email',$data);
    }   

    public function procesoAdded($idproceso){

        $id = auth()->user()->id;
        $user = User::where('users.id','=',$id)->firstOrFail();

        $proceso = Proceso::where('procesos.id','=',$idproceso)->firstOrFail();

        if(!($proceso->users->contains($user))){
            $proceso->users()->save($user);
         }

         alert()->success('Buen trabajo', 'Proceso agregado correctamente');
         return redirect ('/misprocesos');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $rad = $request->get('radicacion');
        $juzgado = $request->get('juzgado');

        $proceso = Proceso::where('procesos.radicacion','=',$rad)
        ->where('procesos.juzgado','=',$juzgado)
        ->first();        

        if($proceso == null){

            $id = auth()->user()->id;
            $user = User::where('users.id','=',$id)->firstOrFail();

            $proceso = new Proceso(array(
                'radicacion'=>$rad,            
                'juzgado'=>$juzgado,
            ));
        
            $proceso->save();
            $proceso->users()->save($user);
            return redirect('/misprocesos/agregarproceso')->with('status','Proceso agragado correctamente, revisalo en la lista de tus procesos');
        }else{
            return view('agregarmisprocesos',compact('proceso'));
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proceso = Proceso::find($id);

        $estados = $proceso->estados()->get();

        //$users = $proceso->users()->get();
        //echo utf8_encode(json_encode($proceso));
        return view('miproceso',compact('proceso','estados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit($idp)
    {
        //
        $proceso = Proceso::find($idp);

        return view ('editarproceso',compact('proceso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idp)
    {
        //        
        $proceso = Proceso::find($idp);
        
        $proceso->radicacion = $request->get('radicacion');
        $proceso->demandante = $request->get('demandante');
        $proceso->demandado = $request->get('demandado');
        $proceso->juzgado = $request->get('juzgado');
        
         $proceso->save();
         return redirect('/misprocesos/editarproceso/'.$idp)->with('status','Proceso actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(proceso $proceso)
    {
        //
    }

    public function getEstados($id){

        $proceso = Proceso::find($id);

        $estados = $proceso->estados()->get();

        echo utf8_encode(json_encode($estados));
    }

    public function procesosUser()
    {        
        
        $id = auth()->user()->id;

        $user = User::where('users.id','=',$id)->firstOrFail();

        $procesos = $user->procesos()->get();
        
        return view('listaprocesos',compact('procesos'));

    }

    public function quitarProceso($idp){
        
        $id = auth()->user()->id;

        $user = User::where('users.id','=',$id)->firstOrFail();

        $procesos = $user->procesos()->detach($idp);

        alert()->success('Proceso quitado correctamente');
        return redirect ('/misprocesos');
        
    }
}
