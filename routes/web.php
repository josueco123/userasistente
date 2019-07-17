<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/misprocesos', 'ProcesoController@procesosUser')->middleware('auth');
Route::get('/misprocesos/proceso/{id?}', 'ProcesoController@show')->middleware('auth');
Route::get('/misprocesos/agregarproceso', 'ProcesoController@create')->middleware('auth');
Route::get('/misprocesos/quitarproceso/{idp?}', 'ProcesoController@quitarProceso')->middleware('auth');
Route::post('/misprocesos/agregarproceso', 'ProcesoController@store')->middleware('auth');
Route::get('/misprocesos/addproceso/{idproceso?}', 'ProcesoController@procesoAdded')->middleware('auth');
Route::get('/misprocesos/editarproceso/{idp?}', 'ProcesoController@edit')->middleware('auth');
Route::post('/misprocesos/editarproceso/{idp?}', 'ProcesoController@update')->middleware('auth');
Route::get('/actualizardatos', 'UserdatoController@create')->middleware('auth');
Route::post('/actualizardatos', 'UserdatoController@store')->middleware('auth');
Route::get('/help', 'UserdatoController@paginaAyuda')->middleware('auth');

Route::get('/misprocesos/solicitud', function(){
    alert()->message('Message', 'Optional Title');
    return redirect('/home');
} );