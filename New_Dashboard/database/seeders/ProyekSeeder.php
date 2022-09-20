<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Proyek;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proyek::create([
            'foto_proyek' => 'http://127.0.0.1:8000/assets/wildlife_animal.png',
            // 'foto_proyek' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/TE754duLVa20N8oIgCG5Q4u3X7o4u9rL74FfGII9.png',
            'nm_proyek' => 'WILDLIFE ANIMAL',
            'device' => 'Website',
        ]);

        Proyek::create([
            'foto_proyek' => 'http://127.0.0.1:8000/assets/fi_mobile.png',
            // 'foto_proyek' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/vI8bAjPneVOhGBRU1e8BSRCHQxRJUWLZFXco0svn.png',
            'nm_proyek' => 'FI MOBILE',
            'device' => 'Mobile App',
        ]);

        Proyek::create([
            'foto_proyek' => 'http://127.0.0.1:8000/assets/always_taylor.png',
            // 'foto_proyek' => 'http://propertiku.proyek.ti.polindra.ac.id/app/public/image/GsSCffP4MKRC1FqmugETQ09MXgGNevNlgyBKjksR.png',
            'nm_proyek' => 'ALWAYS TAILOR',
            'device' => 'Website',
        ]);

    }
}
