<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('iperc');
});

Route::get('registro', function()
{
    return View::make('registro');
});

//aca crearemos el API, ojala sea aigual que en laravel 4.2

Route::group(array('prefix' => 'api/v1'), function(){
    //Registro Público
    //primero el nombre de la llamada, despues, a donde apunta en el controlador, lo voy a hacer en el Controller que esta ahi no mas, de ahi tu creas otro siquieres
    Route::get('obtenerRiesgosPorPeligro', 'TestController@ObtenerRiesgosPorPeligro');
});

//pera creo q el laravel 5 , es distinto la creacion de controladores... 