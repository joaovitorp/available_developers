<?php

namespace Database\Factories;

use App\Models\Recruiter;
use App\Models\TechSkill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecruiterDesiredDeveloperTechSkill>
 */
class RecruiterDesiredDeveloperTechSkillFactory extends Factory
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
            'tech_skill_id' => TechSkill::factory()
        ];
    }
}
