<?php

namespace Database\Factories;

use App\Models\Requirement;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequirementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence()
        ];
    }
}
