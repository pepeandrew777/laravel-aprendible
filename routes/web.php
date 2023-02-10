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
/*
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

Route::get('contactanos', function () {
    //return view('welcome');
    return "Seccion de contactos";
})->name('contactos');
Route::get('/',function(){
  echo "<a href='".route('contactos')."'> Contactos 1 </a><br>";
  echo "<a href='".route('contactos')."'> Contactos 2</a><br>";
  echo "<a href='".route('contactos')."'> Contactos 3</a><br>";
  echo "<a href='".route('contactos')."'> Contactos 4</a><br>";
  echo "<a href='".route('contactos')."'> Contactos 5</a><br>";

});*/

//Route::view('/','home',['nombre'=>'Jorge']);

$portafolio = [
  //['title'=>'Proyecto #1'],
 // ['title'=>'Proyecto #2'],
 // ['title'=>'Proyecto #3'],
  //['title'=>'Proyecto #4']
];
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portafolio','portafolio',compact('portafolio'))->name('portafolio');
Route::view('/contact','contact')->name('contact');

/*
Route::get('/',function(){
    $nombre = "Jorge";
   //return view('home')->with('nombre',$nombre);
   //return view('home')->with(['nombre'=>$nombre]);
  // return view('home',['nombre'=>$nombre]);
  return view('home',compact('nombre'));
})->name('home');*/
