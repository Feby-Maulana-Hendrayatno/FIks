<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\TentangKami;

class ApiTentangKamiController extends Controller
{
    public function index()
    {
        $ttgKami = TentangKami::all();
        if ($ttgKami->count() > 0) {
            $data = [];
            foreach ($ttgKami as $ttg) {
                $data[] = [
                    "id" => $ttg->id,
                    "tentang_km" => $ttg->tentang_km
                ];
            }
            return response()->json([ 'ttgKami' => $data, 'message' => 'Success']);
        } else {
            $null = 'Data Tidak Ada';
            return response()->json($null, 200);
        }
    }
}

