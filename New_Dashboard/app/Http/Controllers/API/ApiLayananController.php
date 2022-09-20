<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Controllers\Request;
use App\Models\Master\Layanan;

class ApiLayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        if ($layanan->count() > 0) {
            $data = [];
            foreach ($layanan as $ly) {
                $data[] = [
                    "id" => $ly->id,
                    "icon_lyn" => $ly->icon_lyn,
                    "nama_lyn" => $ly->nama_lyn,
                    "deskripsi_lyn" => $ly->deskripsi_lyn,
                ];
            }
            return response()->json([ 'layanan' => $data, 'message' => 'Success']);
        } else {
            $null = 'Data Tidak Ada';
            return response()->json($null, 200);
        }
    }
}
