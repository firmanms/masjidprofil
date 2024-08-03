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
            'subject'	=> '{"3e692896-a321-4477-8a2e-83b6bff08253":{"label":"Profil","children":{"da1c0a3d-d911-4489-aef2-ce8d1f1bc6af":{"label":"Sejarah","children":[],"option":"internal","link":"sejarah-masjid"},"686cf0d8-c1ae-41cb-8c18-f2dc31532071":{"label":"Fasilitas Masjid","children":[],"option":"internal","link":"fasilitas-masjid"},"c6f6a895-260e-4b58-8bc7-50dbc42a31ca":{"label":"Pengurus","children":[],"option":"statis","link":"statis\/pengurus"}},"option":"external","link":"#"},"4e85e6c9-3934-4abc-a82a-6f46ef9ab9dd":{"label":"Informasi","children":{"c8eb5fb5-cd9f-4c36-b127-9bbe6f1a25d3":{"label":"Blog","children":[],"option":"statis","link":"statis\/blog"},"85573e52-03c7-4f55-a675-c11eb64ff0b4":{"label":"Event","children":[],"option":"statis","link":"statis\/event"},"feced9a5-f7ec-4f8b-9a0d-0b53faf6ae08":{"label":"Galeri","children":[],"option":"statis","link":"statis\/galeri"},"82795f28-4a2e-4192-88fa-6fcbe761cc9d":{"label":"Kas","children":[],"option":"statis","link":"statis\/kas"}},"option":"external","link":"#"}}',
        ]);
    }
}
