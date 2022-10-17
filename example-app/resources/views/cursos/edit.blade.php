@extends('layauts.plantilla')

@section('title', 'Edit')

@section('content')
<h1>En esta pagina podras editar un curso</h1>

<form action="{{route('cursos.update',$curso)}}" method="POST">
    @csrf
    @method('put')
    
    <label >
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre',$curso->nombre)}}">

    </label>
      <br>
      @error('nombre')

          <small>*{{$message}}</small>
      @enderror
      <br>
    <label >
        Descripcion:
        <br>
        <textarea type="text" name="descripcion" rows="5"> {{old('descripcion',$curso->descripcion)}}</textarea>

    </label>
     <br>
     
     @error('descripcion')

         <small>*{{$message}}</small>
     @enderror
     <br>
    <label >
      Categoria:
      <br>
        <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">

    </label>
    <br>
    @error('categoria')

      <small>*{{$message}}</small>
    @enderror
<br>
    <br>
    <button type="submit">Actualizar formulario</button>

</form>
@endsection


