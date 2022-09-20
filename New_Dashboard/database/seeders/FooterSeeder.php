<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'icon_footer' => 'http://127.0.0.1:8000/assets/Icon.png',
            // 'icon_footer' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/mZPEaorII3pITaGXf7RKZP9Tvg124tg9HDGs6FOO.png',
            'deskripsi_footer' => 'Technology Constantly improve, to provide the best solution.',
        ]);

        Footer::create([
            'icon_footer' => 'http://127.0.0.1:8000/assets/Icon.png',
            // 'icon_footer' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/mZPEaorII3pITaGXf7RKZP9Tvg124tg9HDGs6FOO.png',
            'deskripsi_footer' => 'We don’t sell you a product. We sell you a solution',
        ]);

        Footer::create([
            'icon_footer' => 'http://127.0.0.1:8000/assets/Icon.png',
            // 'icon_footer' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/mZPEaorII3pITaGXf7RKZP9Tvg124tg9HDGs6FOO.png',
            'deskripsi_footer' => 'Speed and quality is our motto',
        ]);
    }
}
