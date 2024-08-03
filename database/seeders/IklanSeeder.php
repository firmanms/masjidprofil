<?php

namespace Database\Seeders;

use App\Models\Iklan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IklanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Iklan::create([
            'id'        => 1,
            'user_id'   => 1,
            'judul'	    => 'pertama',
            'image'     => '',
        ]);

        Iklan::create([
            'id'        => 2,
            'user_id'   => 1,
            'judul'	    => 'kedua',
            'image'     => '',
        ]);

        Iklan::create([
            'id'        => 3,
            'user_id'   => 1,
            'judul'	    => 'ketiga',
            'image'     => '',
        ]);
    }
}
