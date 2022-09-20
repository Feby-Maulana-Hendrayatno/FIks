<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\InformasiLogin;
use App\Models\Master\Layanan;
use App\Models\Master\Proyek;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            "data_informasi_login" => InformasiLogin::where("id", Auth::user()->id)->get()
        ];

        return view("administrator.dashboard", $data);
    }

    public function dashboard()
    {
        $data = [
            "jumlah_kategori" => kategori::count(),
            "jumlah_users" => User::count(),
            "jumlah_layanan" => Layanan::count(),
            "jumlah_proyek" => Proyek::count(),
            "data_informasi_login" => InformasiLogin::where("id", Auth::user()->id)->get()
        ];

        return view("administrator.dashboard", $data);
    }

    public function informasi_login()
    {
        $data = [
            "data_informasi_login" => InformasiLogin::where("id", Auth::user()->id)->get()
        ];

        return view("administrator.informasi_login.index", $data);
    }
}
