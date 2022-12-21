<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use Illuminate\Database\Seeder;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socialNetworks = [
            ["name" => "LinkedIn", "link" => "https://www.linkedin.com", "logo" => "https://www.linkedin.com/images/linkedin_logo.png"],
            ["name" => "GitHub", "link" => "https://www.github.com", "logo" => "https://www.github.com/images/github_logo.png"],
            ["name" => "Facebook", "link" => "https://www.facebook.com", "logo" => "https://www.facebook.com/images/fb_icon_325x325.png"],
            ["name" => "YouTube", "link" => "https://www.youtube.com", "logo" => "https://www.youtube.com/images/youtube_logo.png"],
            ["name" => "Instagram", "link" => "https://www.instagram.com", "logo" => "https://www.instagram.com/images/instagram_logo.png"],
            ["name" => "Twitter", "link" => "https://www.twitter.com", "logo" => "https://www.twitter.com/images/twitter_logo.png"],
        ];

        foreach ($socialNetworks as $socialNetwork) {
            SocialNetwork::insert([
                'name' => $socialNetwork['name'],
                'link' => $socialNetwork['link'],
                'logo' => $socialNetwork['logo'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
