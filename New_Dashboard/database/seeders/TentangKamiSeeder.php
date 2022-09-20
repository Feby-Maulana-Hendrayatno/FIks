<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\TentangKami;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TentangKami::create([
            'tentang_km' => 'Perusahaan IT yang bergerak di bidang jasa Penyedia sistem aplikasi & Pengembangan software house yang sudah bekerja sama dengan Bank-Bank Besar.',
        ]);
    }
}
