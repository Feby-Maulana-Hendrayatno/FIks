<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Carousel;


class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([
            'foto' => 'http://127.0.0.1:8000/assets/HOME.jpg',
            'icon' => 'http://127.0.0.1:8000/assets/qjual_logo.png',
            'deskripsi' => '“Smart Dalam Berjualan & Membuat Transaksi Jadi Lebih Mudah”',
            'nm_link' => 'Learn More',
            'link' => 'http://propertiku.proyek.ti.polindra.ac.id/',
            'warna' => '#0B5ED7',
        ]);

        Carousel::create([
            'foto' => 'http://127.0.0.1:8000/assets/HOME.jpg',
            'icon' => 'http://127.0.0.1:8000/assets/qjual_logo.png',
            'deskripsi' => '“Smart Dalam Berjualan & Membuat Transaksi Jadi Lebih Mudah”',
            'nm_link' => 'Learn More',
            'link' => 'http://propertiku.proyek.ti.polindra.ac.id/',
            'warna' => '#0B5ED7',
        ]);

        Carousel::create([
            'foto' => 'http://127.0.0.1:8000/assets/HOME.jpg',
            'icon' => 'http://127.0.0.1:8000/assets/qjual_logo.png',
            'deskripsi' => '“Smart Dalam Berjualan & Membuat Transaksi Jadi Lebih Mudah”',
            'nm_link' => 'Learn More',
            'link' => 'http://propertiku.proyek.ti.polindra.ac.id/',
            'warna' => '#0B5ED7',
        ]);

        
    }
}
