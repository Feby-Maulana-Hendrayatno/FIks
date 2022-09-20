<?php

namespace App\Http\Controllers;

use App\Models\HubungiKami;
use Illuminate\Http\Request;

class HubungiKamiController extends Controller
{
    public function index()
    {
        $data = [
            "hubungi_kami" => HubungiKami::get()
        ];

        return view("administrator.hubungi_kami.index", $data);
    }
}
