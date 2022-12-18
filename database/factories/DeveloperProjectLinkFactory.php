<?php

namespace Database\Factories;

use App\Models\DeveloperProject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeveloperProjectLink>
 */
class DeveloperProjectLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'developer_project_id' => DeveloperProject::factory(),
            'link' => $this->faker->url
        ];
    }
}
