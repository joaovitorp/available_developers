<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'is_available' => $this->faker->boolean,
            'availability_to_start_working_in_days' => $this->faker->numberBetween(1, 30),
            'summary' => $this->faker->text(100),
        ];
    }
}
