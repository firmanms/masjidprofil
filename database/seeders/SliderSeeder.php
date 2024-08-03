<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'id'        => 1,
            'user_id'   => 1,
            'judul'	    => 'Selamat Datang',
            'subjudul'	=> 'Diwebsite Resmi Masjid Al-Fulan',
            'image'     => '',
        ]);

        Slider::create([
            'id'        => 2,
            'user_id'   => 1,
            'judul'	    => 'Ayo berinfaq',
            'subjudul'	=> 'Rasulullah SAW menyebutkan bahwa bersedekah adalah bukti kejujuran dan keikhlasan akhlak seorang muslim',
            'image'     => '',
        ]);

        Slider::create([
            'id'        => 3,
            'user_id'   => 1,
            'judul'	    => 'Ayo Shalat Berjamaah',
            'subjudul'	=> 'Barang siapa yang pergi ke masjid di pagi atau sore hari, Allah akan sediakan untuknya Surga setiap kali dia pergi ke masjid, pagi atau sore.',
            'image'     => '',
        ]);
    }
}
