<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;

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


Route::view('/','home')->name('home');
Route::view('/about/{param?}','about')->name('about');
Route::get('/portafolio',[PortafolioController::class,'index'])->name('portafolio');
Route::view('/contact','contact')->name('contact')->name('contact');

//Route::resource('projects',PortafolioController::class);
//Route::resource('projects',PortafolioController::class)->only(['index','show']);
//Route::resource('projects',PortafolioController::class)->except(['index','show']);

//Route::apiResource('proyectos',PortafolioController::class);

/*
Route::get('/',function(){
    $nombre = "Jorge";
   //return view('home')->with('nombre',$nombre);
   //return view('home')->with(['nombre'=>$nombre]);
  // return view('home',['nombre'=>$nombre]);
  return view('home',compact('nombre'));
})->name('home');*/
