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

Route::get('/', function () {
    //return view('welcome');
    return "hola desde la pagina de inicio";
});

Route::get('contacto', function () {
    //return view('welcome');
    return "Hola desde la pagina de contacto";
});

Route::get('saludo/{nombre?}',function($nombre="invitado"){
     return "Saludos ". $nombre;
});