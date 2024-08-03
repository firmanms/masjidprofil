<?php

namespace Database\Seeders;

use App\Models\Pengurus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengurus::create([
            'id'        => 1,
            'user_id'   => 1,
            'nama'	    => 'Firman Muhamad Sahidin',
            'jabatan'   => 'Penasehat',
            'deskripsi' => '-',
            'fb' => '-',
            'ig' => '-',
            'wa' => '-',
            'image' => '',
        ]);

        Pengurus::create([
            'id'        => 2,
            'user_id'   => 1,
            'nama'	    => 'Iman',
            'jabatan'   => 'Ketua DKM',
            'deskripsi' => '-',
            'fb' => '-',
            'ig' => '-',
            'wa' => '-',
            'image' => '',
        ]);
    }
}
