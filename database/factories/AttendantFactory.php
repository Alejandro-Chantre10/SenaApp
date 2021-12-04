<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identificacion' => $this->faker->name(),
            'nombre' => $this->faker->name(),
            'celular' => $this->faker->text(),
            'correo' => $this->faker->unique()->safeEmail(),
        ];
    }
}
