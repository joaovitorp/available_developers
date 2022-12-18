<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeveloperAddress>
 */
class DeveloperAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'state' => $this->faker->state,
            'country_id' => Country::factory(),
            'developer_id' => Developer::factory()
        ];
    }
}
