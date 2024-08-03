<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProfilSeeder::class,
            SliderSeeder::class,
            PengurusSeeder::class,
            IklanSeeder::class,
            MenuSeeder::class,
        ]);
    }
}
