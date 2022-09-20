<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLogin extends Model
{
    use HasFactory;

    protected $table = "informasi_login";

    protected $guarded = [''];
}
