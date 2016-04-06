<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    //Route::get('/',['uses' => 'PacienteController@index', 'middleware' => 'auth']);
    Route::get('/',['uses' => 'HomeController@index', 'middleware' => 'auth']);

    /*
	|--------------------------------------------------------------------------
	| Routes Pacientes
	|--------------------------------------------------------------------------
	|
	*/

    Route::get('/pacientes',['uses' => 'PacienteController@index', 'middleware' => 'auth']);
    Route::get('/pacientes/detalle/{id}',['uses' => 'PacienteController@show', 'middleware' => 'auth']);
    Route::get('/pacientes/create',['uses' => 'PacienteController@create', 'middleware' => 'auth']);
    Route::post('/pacientes/store',['uses' => 'PacienteController@store', 'middleware' => 'auth']);
    Route::post('/pacientes/destroy/{id}',['uses' => 'PacienteController@destroy', 'middleware' => 'auth']);
	Route::get('/pacientes/edit/{id}',['uses' => 'PacienteController@edit', 'middleware' => 'auth']);
	Route::post('/pacientes/update',['uses' => 'PacienteController@update', 'middleware' => 'auth']);
	Route::post('/pacientes/search/{criterio}',['uses' => 'PacienteController@search', 'middleware' => 'auth']);

    /*
	|--------------------------------------------------------------------------
	| Routes Cuestionarios
	|--------------------------------------------------------------------------
	|
	*/

    Route::get('/cuestionario/show/{id_paciente}',['uses' => 'CuestionarioController@show', 'middleware' => 'auth']);
    Route::get('/cuestionario/create/{id_paciente}',['uses' => 'CuestionarioController@create', 'middleware' => 'auth']);
    Route::post('/cuestionario/store',['uses' => 'CuestionarioController@store', 'middleware' => 'auth']);
	
	/*
	|--------------------------------------------------------------------------
	| Routes Controles
	|--------------------------------------------------------------------------
	|
	*/
	
	Route::get('/controles/create/{fk_id_paciente}',['uses' => 'ControlController@create', 'middleware' => 'auth']);
	Route::post('/controles/store',['uses' => 'ControlController@store', 'middleware' => 'auth']);
	Route::get('/controles/list/{fk_id_paciente}',['uses' => 'ControlController@index', 'middleware' => 'auth']);
	Route::get('/controles/edit/{id}',['uses' => 'ControlController@edit', 'middleware' => 'auth']);
	Route::post('/controles/update',['uses' => 'ControlController@update', 'middleware' => 'auth']);
	Route::post('/controles/destroy/{id}',['uses' => 'PacienteController@destroy', 'middleware' => 'auth']);
});


//Route::get('/pacientes',['uses' => 'PacienteController@index', 'middleware' => 'auth']);