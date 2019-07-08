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



Route::group(['middleware'=>['auth']], function() {
  Route::get('/home', 'HomeController@index')->name('home');
  //RUTAS DE LA CONFIGURACION
  Route::resource('roles','RoleController');
  Route::resource('user','UserController');
  Route::resource('permissions', 'PermissionController');

  Route::resource('proyectos', 'proyectosController');

  Route::resource('creditos', 'creditosController');
  Route::get('getCuentasempresa/{idempresa}', 'creditosController@getCuentasempresa');

  Route::resource('efinancieras', 'efinancieraController');
  Route::resource('cproyectos', 'cproyectosController');

  Route::post('movimiento/guardar', 'creditosController@regmov')->name('movimiento.store');
  Route::get('CorridaFinanciera/{id}', 'creditosController@crearCorridaFinanciera')->name('CorridaFinanciera.create');
  Route::get('getCreditoPagos/{id}', 'creditosController@getCreditoPagos');


  Route::resource('clasificas', 'clasificaController');


  Route::resource('bancos', 'bancosController');

  Route::resource('empresas', 'empresasController');
  Route::post('empresas/pagocredito', 'empresasController@pagocredito')->name('credito.pay');

  Route::post('operaciones/guardar', 'empresasController@regoper')->name('operacion.store');

  Route::resource('bcuentas', 'bcuentasController');
});





Route::resource('metpagos', 'metpagoController');

Route::resource('proveedores', 'proveedoresController');
