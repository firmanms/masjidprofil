<?php

namespace Database\Seeders;

use App\Models\Halaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Halaman::create([
            'id'        => 1,
            'user_id'   => 1,
            'judul'	    => 'Sejarah Masjid',
            'slug'      => 'sejarah-masjid',
            'deskripsi' => 'Officia fugiat eiusmod qui ullamco adipisicing nulla. Sunt pariatur sint culpa excepteur excepteur eu quis cupidatat ullamco sint consequat commodo. Consequat consectetur quis officia eiusmod dolore veniam cillum. Aute ullamco adipisicing mollit consectetur. Nisi ipsum laboris consequat fugiat cillum dolor magna fugiat exercitation nisi. Nulla id commodo exercitation ad veniam quis irure dolore commodo in veniam in excepteur excepteur.',
            'status'    => 1,
        ]);

        Halaman::create([
            'id'        => 2,
            'user_id'   => 1,
            'judul'	    => 'Fasilitas Masjid',
            'slug'      => 'fasilitas-masjid',
            'deskripsi' => 'Officia fugiat eiusmod qui ullamco adipisicing nulla. Sunt pariatur sint culpa excepteur excepteur eu quis cupidatat ullamco sint consequat commodo. Consequat consectetur quis officia eiusmod dolore veniam cillum. Aute ullamco adipisicing mollit consectetur. Nisi ipsum laboris consequat fugiat cillum dolor magna fugiat exercitation nisi. Nulla id commodo exercitation ad veniam quis irure dolore commodo in veniam in excepteur excepteur.',
            'status'    => 1,
        ]);
    }
}
