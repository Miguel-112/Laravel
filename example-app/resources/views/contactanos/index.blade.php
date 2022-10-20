
@extends('layauts.plantilla')

@section('title', 'contactanos')


@section('content')
<h1>Dejanos un mensaje</h1>


<form action="{{route('contactanos.store')}}" method="POST">
 
    @csrf

 <label for="">Nombre

   <br>

   <input class="text"  name="nombre">

 </label>

 <br>

 @error('nombre')

 <p><strong>{{$message}}</strong></p>
     
 @enderror
 
 <label for="">Correo

   <br>
    <input class="text"  name="correo">
 
  </label>
  @error('correo')

  <p><strong>{{$message}}</strong></p>
      
  @enderror
  <label >
   <br>
   Mensaje:
   <br>
   <textarea name="mensaje" rows="4"></textarea>
   
  </label>

  @error('mensaje')

  <p><strong>{{$message}}</strong></p>
      
  @enderror

  <br>

  <button type="submit">Enviar mensaje</button>




</form>





@endsection
