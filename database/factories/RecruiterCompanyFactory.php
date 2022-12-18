<?php

namespace Database\Factories;

use App\Models\Recruiter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecruiterCompany>
 */
class RecruiterCompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'recruiter_id' => Recruiter::factory(),
            'name' => $this->faker->company,
        ];
    }
}
