<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => "Alan",
            "email" => "alan@gmail.com",
            "password" => bcrypt("alan"),
            'foto' => 'http://127.0.0.1:8000/gambar/gambar_user.png',
            "created_by" => 0
        ]);

        User::create([
            "nama" => "Feby",
            "email" => "Feby@gmail.com",
            "password" => bcrypt("Feby"),
            'foto' => 'http://127.0.0.1:8000/gambar/gambar_user.png',
            "created_by" => 0
        ]);
    }
}
