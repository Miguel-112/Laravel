
@extends('layauts.plantilla')

@section('title', 'Create')

@section('content')
<h1>En esta pagina podras crear un curso</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label >
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
    </label>

    @error('nombre')

      <br>
      <small>*{{$message}}</small>
      <br>
     
    @enderror

      <br>
    <label >
        Descripcion:
        <br>
        <textarea  name="descripcion" rows="5">{{old('descripcion')}}</textarea>

    </label>
     <br>

     @error('descripcion')

      <br>
      <small>*{{$message}}</small>
      <br>
     
    @enderror
    <label >
      Categoria:
      <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">

    </label>
    <br>
    @error('categoria')

      <br>
      <small>*{{$message}}</small>
      <br>
     
    @enderror

    <br>
    <button type="submit">Enviar formulario</button>

</form>
@endsection


