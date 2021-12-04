<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiagnosticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->date(),
            'hora' => $this->faker->time(),
            'descripcion' => $this->faker->text(),
            'resultado' => $this->faker->text(),
        ];
    }
}
