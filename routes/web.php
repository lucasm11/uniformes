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

Route::get('/altaproductos','uniformes@altaproductos');
Route::POST('/guardaproductos','uniformes@guardaproductos')->name('guardaproductos');
Route::get('/reporteproductos','uniformes@reporteproductos');

Route::get('/altaempleado','tap_empleados@altaempleado');
Route::POST('/guardaempleado','tap_empleados@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleado','tap_empleados@reporteempleado');