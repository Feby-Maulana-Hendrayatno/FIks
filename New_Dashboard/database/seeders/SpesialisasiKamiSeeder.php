<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\SpesialisasiKami;

class SpesialisasiKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpesialisasiKami::create([
            'foto' => 'http://127.0.0.1:8000/assets/meeting.png',
            // 'foto' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/3Tc2rfQy4o4DVPYw2VLAwro33xntV2ycNSRLiiSK.png',
            'deskripsi' => 'Jaring adalah perusahaan IT yang bergerak di bidang jasa penyedia sistem aplikasi, Pengembangan software house, E-Ticketing, Pencatatan Transaksi Digital, Penyedia Mesin TAP EDC/Bus Validator yang sudah bekerja sama dengan Bank-Bank Besar. Dengan mengedepankan integritas, kami akan selalu memberikan jasa terbaik di setiap pekerjaan yang kami lakukan. Jaring selalu bersemangat dalam menciptakan berdasarkan kebutuhan klien dengan komitmen yang tinggi dan kami juga bisa menjadi solusi bagi perusahaan penerbit uang/uang digital yang ingin mengembangkan dan menambahkan transaksi dari seluruh jaringan retail yang bekerjasama dengan kami.',
        ]);
    }
}
