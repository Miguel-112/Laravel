
@extends('layauts.plantilla')

@section('title', 'Create')

@section('content')
<h1>En esta pagina podras crear un curso</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label >
        Nombre:
        <br>
        <input type="text" name="nombre">

    </label>
      <br>
    <label >
        Descripcion:
        <br>
        <textarea type="text" name="descripcion" rows="5"></textarea>

    </label>
     <br>
    <label >
      Categoria:
      <br>
        <input type="text" name="categoria" >

    </label>

    <br>
    <button type="submit">Enviar formulario</button>

</form>
@endsection


