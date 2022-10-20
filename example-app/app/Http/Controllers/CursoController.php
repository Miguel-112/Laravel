<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Http\Requests\Cursoupdate;
use App\Models\Curso;
use Illuminate\Http\Request;


class CursoController extends Controller
{
    public function index(){ //metodo principal

        $cursos = Curso::orderBy('id','desc')->paginate();
        

        return view('cursos.index', compact('cursos'));// le pasamos los cursos a la vista

    }

    public function create(){ //metodo mostrar para crear un formulario

        return view('cursos.create');
    
    }


    public function store(StoreCurso $request){

        // return $request->all();

        /*$curso = new Curso();

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/
        $curso = Curso::create($request->all());//el request->alt trae todos los atributos del curso que bienen del formulario

        return redirect()->route('cursos.show',$curso);


    }

    public function show(Curso $curso){ //metodo mostrar un elemnto en particular


        // $curso = Curso::find($id);// devuelve un curso por el id de la base de datos
        // //compact('curso') //['curso'=>$curso] devuelve est array

        return view('cursos.show',compact('curso'));
    }



    public function edit(Curso $curso){

        // $curso = Curso::find($id);

        // return $curso;

        return view('cursos.edit', compact('curso'));
  

    }


    public function update(Curso $curso, Cursoupdate $request){

       


        // $curso->nombre = $request->nombre;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();
         
        $curso->update($request->all());

        return redirect()->route('cursos.show',$curso);

    }


    public function destroy(Curso $curso){

        $curso->delete();
        return redirect()->route('cursos.index',$curso);

    }
}


