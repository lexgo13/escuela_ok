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
Route::group(['middleware'=> 'web'], function(){


      Route::post('adminn','AdministradorController@login');
      Route::get('adminn','AdministradorController@showLoginForm');
      Route::resource('admin', 'AdministradorController');




});




      Route::get('/', function () {
      return view('welcome');
        });

        Route::auth();

  //Rutas de administradores ---------------------------------------------------

    Route::get('adminprincipal', function(){
      return view('administradores/principal');
    });


  // Rutas de Prueba -----------------------------------------------------------

    Route::get('home', 'HomeController@index');


  // Rutas de Alumnos -----------------------------------------------------------
  Route::get('alumnos_registro', 'PaginasController@getAlumnosRegistro');

  // Rutas de Paises -----------------------------------------------------------

  Route::get('pais_registrar', 'PaisController@create');
  Route::post('pais_registrar', 'PaisController@store');

  // Rutas de Prueba -----------------------------------------------------------

  Route::get('hola', function(){
  return view('otros/provincia/hola');
  });

  // Rutas de las Provincias ---------------------------------------------------
  Route::resource('provincia',   'ProvinciaController');

  //Padres
  Route::get('padresprincipal', function(){
  return view('padres/home');
  });
