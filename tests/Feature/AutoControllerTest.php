<?php

namespace Database\Factories;

use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoFactory extends Factory
{
    protected $model = Auto::class;

    public function definition()
    {
        return [
            'marca' => $this->faker->company,
            'modelo' => $this->faker->word,
            'color' => $this->faker->colorName,
            'puertas' => $this->faker->randomNumber(1),
            'cilindrado' => $this->faker->randomNumber(2),
            'automatico' => $this->faker->boolean,
            'electrico' => $this->faker->boolean,
        ];
    }
}