<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'id'                => 1,
            'user_id'           => 1,
            'nama_masjid'	    => 'Al-Fulan',
            'sejarah_singkat'   => 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum',
            'alamat'    	    => 'Kp. Babakan DKA RT.05/15 Desa Cikuya Kecamatan Cicalengka Kabupaten Bandung Provinsi Jawa Barat',
            'whatsapp'  	    => '6289000000000',
            'telp'	            => '62278900000',
            'url_map'	        => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d196.89801118525492!2d107.82980311079373!3d-6.97852297967245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1722651043174!5m2!1sid!2sid',
            'email'	            => 'alfulan@mail.com',
            'channel_yt'	    => 'UCnSKokZJ0vSIff0AYVbQmuQ',
            'yt'	            => 'https://youtube.com/',
            'fb'	            => 'https://facebook.com/',
            'ig'	            => 'https://instagram.com/',
            'video_profil'	    => 'https://www.youtube.com/watch?v=xCQcrTiSM-M',
            'image'	            => '',
            'logo'	            => '',
            'favicon'	        => '',
            'seo'	            => 'Masjid Al-Fulan',
            'seo_desc'	        => 'Masjid Al-Fulan di Cicalengka',
        ]);
    }
}
