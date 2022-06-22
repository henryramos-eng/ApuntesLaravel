<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('helloworld');
});

// Rutas solo vistas

Route::view('/home2', 'helloworld');

// Rutas con Parametros 1

Route::get('/param/{name}', function ($name) {
    return ('welcome =>' . $name);
});


// Rutas con Parametros 2

Route::get('/param2/{name}/{othername}', function ($name, $othername) {
    return ('Welcome: ' . $name . '<br>tu alias es: ' . $othername);
});


// Rutas con Parametros 2

Route::get('/param3/{name}/{othername?}', function ($name, $othername) {
    if ($othername)
        return ('Welcome: ' . $name . '<br>tu alias es: ' . $othername);
    else
        return ('tu nombre es : ' . $name);
});



//Varias Rutas

Route::get('ruta1/ruta2/ruta3', function () {
    return ('ruta');
})->name('ruta');
