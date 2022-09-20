<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\SpesialisasiKami;

class ApiSpesialisasiKamiController extends Controller
{
    public function index()
    {
        $spesialisasiKami = SpesialisasiKami::all();
        if ($spesialisasiKami->count() > 0) {
            $data = [];
            foreach ($spesialisasiKami as $sk) {
                $data[] = [
                    "id" => $sk->id,
                    "judul" => $sk->judul,
                    "foto" => $sk->foto,
                    "deskripsi" => $sk->deskripsi,
                ];
            }
            return response()->json([ 'tentangKami' => $data, 'message' => 'Success']);
        } else {
            $null = 'Data Tidak Ada';
            return response()->json($null, 200);
        }
    }
}
