<?php

use Illuminate\Support\Facades\Route; //importa la clase route

/*
* Este es nuestro ENRUTADOR.
* Encargado de gestionar todas las vistas que hagamos inicialmente en nuestra
* web de laravel.*
*
*/
/*Metodos estaticos de "Route" destacados:
* Route::view(), este view es un atajo. No necesita acceder a la base de datos, podemos ahorrarnos el controlador, es una vista estatica.
* Route::get('mi/ruta/', ControladorDeLaRuta)
* Route::post()
* Route::put()
* Route::delete()
* Route::patch()
* Corresponden a los metodos http.
*/


Route::view('/', 'index')->name('index');
//->name('nombre...xx'), le asociamos un nombre a la ruta.

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');


