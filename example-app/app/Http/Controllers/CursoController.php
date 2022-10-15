<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //metodo principal

        return view('cursos.index');
    }

    public function create(){ //metodo mostrar para crear un formulario

        return view('cursos.create');
    
    }

    public function show($curso){ //metodo mostrar un elemnto en particular

        //compact('curso') //['curso'=>$curso] devuelve est array

        return view('cursos.show',compact('curso'));
    }
}
