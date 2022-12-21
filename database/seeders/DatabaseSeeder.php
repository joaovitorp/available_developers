<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdministratorSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(DeveloperTypeSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(SocialNetworkSeeder::class);
        $this->call(TechSkillSeeder::class);
    }
}
