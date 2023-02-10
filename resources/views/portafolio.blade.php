@extends('layout')
@section('title','Portafolio')
@section('content')
<h1>Portafolio</h1>
 
   <ul>
    @if($portafolio)
     @foreach ($portafolio as $portafolioItem)
      <li> {{$portafolioItem['title']}} </li> 
     @endforeach
   @else
    <li>No hay proyectos para mostrar</li>   
    @endif
   </ul>
@endsection

