<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Alert;
use App\Userdato;
use Illuminate\Http\Request;

class UserdatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $id = auth()->user()->id;
        $userdatos = Userdato::where('userdatos.user_id','=',$id)->first();

        return view('editardatos',compact('userdatos'));        
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
        $this->validate($request, [
            'identificacion' => 'required',
            'telefono' => 'required|max:10|min:7',
            'direccion' => 'required',
        ]);

        $id = auth()->user()->id;

        $userdato = Userdato::where('userdatos.user_id','=',$id)->first();

        if($userdato == null){
            
            $userdato = new Userdato(array(            
                'identificacion'=> $request->get('identificacion'),
                'telefono'=> $request->get('telefono'),
                'direccion' => $request->get('direccion'),
                'user_id' => $id,
            ));
        }else {

            $userdato->identificacion = $request->get('identificacion');
            $userdato->telefono = $request->get('telefono');
            $userdato->direccion = $request->get('direccion');
        }                

        $userdato->save();
        alert()->success('Datos actualizados');
        return redirect('/actualizardatos')->with('status','Datos actualizados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Userdato  $userdato
     * @return \Illuminate\Http\Response
     */
    public function show(Userdato $userdato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userdato  $userdato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('edituserdato');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userdato  $userdato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $userdato = Userdato::where('userdatos.user_id','=',$id)->firstOrFail();
        
        $userdato->apellido = $request->get('apellido');
        $userdato->identificacion = $request->get('identificacion');
        $userdato->telefono = $request->get('telefono');
        $userdato->direccion = $request->get('direccion');

        $userdato->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userdato  $userdato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userdato $userdato)
    {
        //
    }

    public function paginaAyuda(){
        return view('ayuda');
    }

    public function ayudaRegistrarse(){
        return view('help.registrarse');
    }

    public function ayudaDatos(){
        return view('help.actulizardatos');
    }

    public function ayudaProceso(){
        return view('help.procesohelp');
    }

    public function ayudaAuto(){
        return view('help.solicitarauto');
    }

    public function ayudaPago(){
        return view('help.realizarpagos');
    }

    public function quienesSomos(){
        return view('quiensomos');
    }
}
