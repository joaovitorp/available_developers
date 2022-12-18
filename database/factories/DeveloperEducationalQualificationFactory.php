<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeveloperEducationalQualification>
 */
class DeveloperEducationalQualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'developer_id' => Developer::factory(),
            'name' => $this->faker->name,
            'institution' => $this->faker->name,
            'is_finished' => false,
            'start_date' => $this->faker->date,
            'end_date' => null,
        ];
    }
}
