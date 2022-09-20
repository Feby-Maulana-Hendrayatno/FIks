<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Layanan::create([
            'icon_lyn' => 'http://127.0.0.1:8000/assets/sosmed-payment.png',
            // 'icon_lyn' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/zQPHhwKW65ifu974wSpgvgxn9ZUav3CiJNAo7vwU.png',
            'nama_lyn' => 'Pembayaran Digital',
            'deskripsi_lyn' => 'Transaksi menggunakan berbagai macam metode pembayaran',
        ]);

        Layanan::create([
            'icon_lyn' => 'http://127.0.0.1:8000/assets/ipaymu_service_edcpos.png',
            // 'icon_lyn' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/jxHFhCRj6pVinPsqYOANy6nR2p6h0OZBSWUIoID8.png',
            'nama_lyn' => 'EDC-POS',
            'deskripsi_lyn' => 'Transaksi lebih mudah dengan menggunakan terminal EDC POS',
        ]);

        Layanan::create([
            'icon_lyn' => 'http://127.0.0.1:8000/assets/ipaymu_service_store.png',
            // 'icon_lyn' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/wDkEl2NpVNNZgcUVel9rCyzCR9AFcrJ7UsislNyD.png',
            'nama_lyn' => 'Convenience Stores',
            'deskripsi_lyn' => 'Sediakan pembayaran melalui Indomaret dan Alfamart pada bisnis Anda',
        ]);

        Layanan::create([
            'icon_lyn' => 'http://127.0.0.1:8000/assets/qrish.png',
            // 'icon_lyn' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/HLtnTIsh6tfOJiS8PAkTTmHNZnZiJohYBjRP1cOT.png',
            'nama_lyn' => 'QRIS',
            'deskripsi_lyn' => '1 QRCode Untuk Semua e-wallet',
        ]);

        Layanan::create([
            'icon_lyn' => 'http://127.0.0.1:8000/assets/ipaymu_service_va.png',
            // 'icon_lyn' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/rPNksMVIwVzqDvjOSYf0wjlh3zfq9LAobclmxwtf.png',
            'nama_lyn' => 'Instant VA',
            'deskripsi_lyn' => 'Pembayaran VA dan transfer bank lebih mudah untuk 140 Bank',
        ]);

        Layanan::create([
            'icon_lyn' => 'http://127.0.0.1:8000/assets/ipaymu_service_credit_card.png',
            // 'icon_lyn' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/TPmGoQFzj0W9WbQi6qehztSaCfi1vWiYD9idYohT.png',
            'nama_lyn' => 'Kartu Kredit',
            'deskripsi_lyn' => 'Opsi pembayaran yang komprehensif kepada customer Anda.',
        ]);

    }
}
