<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalDataFactory extends Factory
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
            'apellidos' => $this->faker->name(),
            'tipo_documento' => $this->faker->name(),
            'numero_documento' => $this->faker->name(),
            'fecha_nacimiento' => $this->faker->date(),
            'genero' => $this->faker->name(),
            'celular' => $this->faker->name(),
            'foto' => $this->faker->name(),

        ];
    }
}
