<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Controllers\Request;
use App\Models\Master\Proyek;

class ApiProyekController extends Controller
{
    public function index()
    {
        $produk = Proyek::all();
        if ($produk->count() > 0) {
            $data = [];
            foreach ($produk as $pd) {
                $data[] = [
                    "id" => $pd->id,
                    "foto_proyek" => $pd->foto_proyek,
                    "nm_proyek" => $pd->nm_proyek,
                    "device" => $pd->device,
                ];
            }
            return response()->json([ 'produk' => $data, 'message' => 'Success']);
        } else {
            $null = 'Data Tidak Ada';
            return response()->json($null, 200);
        }
    }
}
