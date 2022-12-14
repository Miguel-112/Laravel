<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/',HomeController::class)->name('home');


// Route::controller(CursoController::class)->group(function(){
    
//     Route::get('cursos',[CursoController::class,'index'])->name('cursos.index');// con el name se le dan alias a los nombre para despues invocarlosdesde las vistas
//     Route::get('cursos/create',[CursoController::class, 'create'] )->name('cursos.create');
    
//     Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

//     Route::get('cursos/{curso}',[CursoController::class,'show'] )->name('cursos.show');

//     Route::get('cursos/{curso}/edit', [CursoController::class,'edit'] )->name('cursos.edit');

//     Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');
    
//     Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');


//Route::resource('asignaturas',CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos'); //el parametter es para que las variable que se envian atravez de la url no le ponga el nombre como signaturas si no que las deje como curso, ya que asi se reciben .

Route::resource('cursos',CursoController::class);

Route::view('nosotros','nosotros')->name('nosotros'); // se usa para crear vistas staticas

Route::get('contactanos',[ContactanosController::class,'index'])->name('contactanos.index');

Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');

// });



/*Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null //? sirve para que la variable categoria sea opcional 
) {

    return "Bienvenidos al curso $curso, de la categoria $categoria";
    
});*/



/*Route::get('/sobrenosotros', function () {
    return "Esta es la pagina que habla sobre nosotros";
});


Route::get('/contacto', function () {
    return "aqui puedes conctatarnos";
});

Route::get('/foro', function () {
    return view('Aqui esta el foro');
});


Route::get('/post/{id}/{nombre}', function ($id, $nombre) {

    return ('Aqui esta el foro Numero : '. $id . "creado por: ". $nombre);
})->where(['id'=>'[0-9]+', 'nombre'=>'[a-zA-Z]+']); //valida que contenga el atributo id numero y lectra el atributo nombre*/


