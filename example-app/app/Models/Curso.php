<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //por defecto administra la tabla curso, pero si se quiere administrar otra tabla se le asigna el siguiente comando

    //protected $table = "users";

    // protected $fillable = ['nombre', 'descripcion', 'categoria'];

    //protected $guarded= ['status']; // guardaria todos los campos menos el campus status
    protected $guarded= [];//se debe dejar el array vacio por que no tenemos un campo protegido
}


