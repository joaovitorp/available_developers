<?php

namespace Database\Seeders;

use App\Enum\DeveloperTypeEnum;
use App\Models\DeveloperType;
use Illuminate\Database\Seeder;

class DeveloperTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developerTypes = [
            DeveloperTypeEnum::Backend->value,
            DeveloperTypeEnum::Frontend->value,
            DeveloperTypeEnum::DevOps->value
        ];

        foreach ($developerTypes as $developerType) {
            DeveloperType::insert([
                'name' => $developerType,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
