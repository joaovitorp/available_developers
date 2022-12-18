<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeveloperProfessionalExperience>
 */
class DeveloperProfessionalExperienceFactory extends Factory
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
            'company_name' => $this->faker->company,
            'role' => $this->faker->jobTitle,
            'description' => $this->faker->text,
            'is_still_working_at_it' => $this->faker->boolean,
            'start_date' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'end_date' => $this->faker->dateTimeBetween('-8 years', 'now'),
        ];
    }
}
