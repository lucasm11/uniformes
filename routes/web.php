<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/saludo', function () {
    echo "hola mundo uniformes bugs";
});

Route::get('/altacliente','uniformes@altacliente');
Route::POST('/guardacliente','uniformes@guardacliente')->name('guardacliente');
Route::get('/reporteclientes','uniformes@reporteclientes');

<<<<<<< HEAD
Route::get('/altaproductos','tab_productos@altaproductos');
Route::POST('/guardaproductos','tab_productos@guardaproductos')->name('guardaproductos');
Route::get('/reporteproductos','tab_productos@reporteproductos');

Route::get('/altaescuelas','tab_escuelas@altaescuelas');
Route::POST('/guardaescuelas','tab_escuelas@guardaescuelas')->name('guardaescuelas');
Route::get('/reporteescuelas','tab_escuelas@reporteescuelas');
=======

Route::get('/altaempleado','tap_empleados@altaempleado');
Route::POST('/guardaempleado','tap_empleados@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleado','tap_empleados@reporteempleado');
>>>>>>> b332ecf710ead0a4c8107d960ae274898a4f4dd4
