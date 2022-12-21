<?php

namespace Database\Factories;

use App\Enum\DeveloperTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeveloperType>
 */
class DeveloperTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                DeveloperTypeEnum::Backend->value,
                DeveloperTypeEnum::Frontend->value,
                DeveloperTypeEnum::DevOps->value
            ]),
        ];
    }
}
