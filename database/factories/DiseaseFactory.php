<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiseaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'tiempo_enfermedad' => $this->faker->date(),
        ];
    }
}
