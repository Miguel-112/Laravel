<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
      protected $model = Curso::class;

    public function definition()
    {

        $name= $this->faker->sentence(); // se creo esta variable para que el nombre y el slug que es la variable que se genera para las url sean iguales

        return [

            'nombre'=>  $name, // se llena con una oracion
            'slug'=> Str::slug( $name, '-'),//Genera un nombre y los espaciados de ese nombre le pones gion esto s inplemento ara poner ulr 
            'descripcion'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web']) // se llena con cualquiera de estos dos elementos 
        ];
    }
}
