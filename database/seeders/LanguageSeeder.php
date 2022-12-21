<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'Mandarin',
            'Spanish',
            'English',
            'Hindi',
            'Arabic',
            'Portuguese',
            'Bengali',
            'Russian',
            'Japanese',
            'Punjabi',
            'German',
            'Javanese',
            'Wu',
            'Malay',
            'Telugu',
            'Vietnamese',
            'Korean',
            'French',
            'Marathi',
            'Tamil',
            'Urdu',
            'Turkish',
            'Italian',
        ];

        foreach ($languages as $language) {
            Language::insert([
                'name' => $language,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
