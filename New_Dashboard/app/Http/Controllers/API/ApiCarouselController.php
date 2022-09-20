<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\Carousel;

class ApiCarouselController extends Controller
{
    public function index()
    {
        $carousel = Carousel::orderBy("created_at", "DESC")->paginate(4);
        if ($carousel->count() > 0) {
            $data = [];
            foreach ($carousel as $cs) {
                $data[] = [
                    "id" => $cs->id,
                    "foto" => $cs->foto,
                    "icon" => $cs->icon,
                    "deskripsi" => $cs->deskripsi,
                    "nm_link" => $cs->nm_link,
                    "link" => $cs->link,
                    "warna" => $cs->warna,
                ];
            }
            return response()->json([ 'carousel' => $data, 'message' => 'Success']);
        } else {
            $null = 'Data Tidak Ada';
            return response()->json($null, 200);
        }
    }
}
