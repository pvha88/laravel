<?php 

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('api/user', function (Request $request) {
    return $request->user();
});*/
//Route::apiResource("clientes", "ClientesController");
//Route::apiResource("usuarios", "UsuariosController");
//Route::apiResource("dispostivos", "DispositivoController"); 
//Route::apiResource('dispostivos/{dispostivo}','DispositivoController',[ 'only'=>['show'] ]);
/*Route::apiResource('dispostivos/{dispostivo}','DispositivoController',[ 'only'=>['update'] ]);//*/
//ruta de los clientes
Route::get('clientes', 'ClientesController@index');
Route::get('clientes/{clientes}', 'ClientesController@show');
Route::post('clientes', 'ClientesController@store');
Route::put('clientes/{clientes}', 'ClientesController@update');
Route::delete('clientes/{clientes}', 'ClientesController@destroy');
//rutas de los dispostivos
Route::get('dispostivos', 'DispositivoController@index');
Route::get('dispostivos/{dispositivo}', 'DispositivoController@show');
Route::post('dispostivos', 'DispositivoController@store');
Route::put('dispostivos/{dispostivo}', 'DispositivoController@update');
Route::delete('dispostivos/{dispostivo}', 'DispositivoController@destroy');
//rutas de los dispostivos
Route::get('usuarios', 'UsuariosController@index');
Route::get('usuarios/{usuarios}', 'UsuariosController@show');
Route::post('usuarios', 'UsuariosController@store');
Route::put('usuarios/{usuarios}', 'UsuariosController@update');
Route::delete('usuarios/{usuarios}', 'UsuariosController@destroy');