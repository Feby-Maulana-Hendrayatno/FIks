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
            "alamat" => "Jl. Pintu Air IV No.25A, RT.11/RW.8, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710",
            "no_hp" => "087727345567"
        ]);
    }
}
