<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = Profile::where('email', 'dedypry30@gmail.com')->first();
        Portfolio::truncate();

        for ($i = 1; $i <= 14; $i++) {
            Portfolio::create([
                "title" => "",
                "profile_id" => $profile->id,
                "img_url" => "/assets/img/portfolio/$i.png"
            ]);
        }
    }
}
