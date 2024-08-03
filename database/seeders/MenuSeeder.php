<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'id'        => 1,
            'user_id'   => 1,
            'name'	    => 'Menu Utama',
            'subject'	=> '',
        ]);
    }
}
