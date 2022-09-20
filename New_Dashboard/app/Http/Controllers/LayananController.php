<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $data = [
            "data_layanan" => Layanan::get()
        ];

        return view("administrator.layanan.index", $data);
    }
}
