<?php

namespace Database\Seeders;

use App\Models\ProfilPerusahaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilPerusahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilPerusahaan::create([
            "logo" => "http://127.0.0.1:8000/assets/logo.png",
            "singkatan" => "Jaring",
            "nama" => "PT. JARING SOLUSI",
            "alamat" => "Jln. Budi Utomo",
            "no_hp" => "081324237299"
        ]);
    }
}
