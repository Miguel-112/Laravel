@extends('layauts.plantilla')

@section('title', 'Cursos')

@section('content')

 <H1>Bienvenidos a la pagina Principal de los cursos</H1>
 <a href="{{route('cursos.create')}}">Crear Curso</a>

  <ul>

    @foreach ($cursos as $curso)

    <li>
        <a href="{{route('cursos.show', $curso->id)}}">{{$curso->nombre}}</a>
    </li>
    
    @endforeach
  </ul>

  
  {{$cursos->links()}}
@endsection
