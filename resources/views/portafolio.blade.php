@extends('layout')
@section('title','Portafolio')
@section('content')
<h1>Portafolio</h1>
   @for()
   @endfor
   @while()
   @endwhile

   @switch($value)
    @case(value)
        
        @break
    $@default
        
@endswitch
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

<!-- @isset @endisset @else, @forelse   @empty @endforelse   <pre> var_dump($loop) </pre>  <pre> {{ $loop->last ? 'Es el ultimo':'' }} </pre> -->