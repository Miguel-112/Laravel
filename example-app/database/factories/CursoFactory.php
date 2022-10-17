<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [

            'nombre'=> $this->faker->sentence(), // se llena con una oracion
            'descripcion'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web']) // se llena con cualquiera de estos dos elementos 
        ];
    }
}
