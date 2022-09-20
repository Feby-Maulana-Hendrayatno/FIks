<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(ProfilPerusahanSeeder::class);
        $this->call(TentangKamiSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(LayananSeeder::class);
        $this->call(ProyekSeeder::class);
        $this->call(SpesialisasiKamiSeeder::class);
        $this->call(ProfilPerusahanSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(CarouselSeeder::class);
    }
}
