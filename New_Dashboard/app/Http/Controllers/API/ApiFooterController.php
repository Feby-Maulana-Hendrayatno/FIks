<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Controllers\Request;
use App\Models\Master\Footer;

class ApiFooterController extends Controller
{
    public function index()
    {
        $footer = Footer::all();
        if ($footer->count() > 0) {
            $data = [];
            foreach ($footer as $ft) {
                $data[] = [
                    "id" => $ft->id,
                    "icon_footer" => $ft->icon_footer,
                    "deskripsi_footer" => $ft->deskripsi_footer
                ];
            }
            return response()->json([ 'footer' => $data, 'message' => 'Success']);
        } else {
            $null = 'Data Tidak Ada';
            return response()->json($null, 200);
        }
    }
}
