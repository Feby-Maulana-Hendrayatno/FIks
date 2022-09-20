<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $table = "proyek";
    protected $guarded = [""];

    public function getKaategori(){
        return $this->belongsTo("App\Models\Kategori", "device", "nama_kategori" );
    }
}
