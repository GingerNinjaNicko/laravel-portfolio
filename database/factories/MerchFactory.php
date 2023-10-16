<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'cost' => $this->faker->numberBetween(1, 300),
            'stock' => $this->faker->numberBetween(1, 300),
        ];
    }
}
