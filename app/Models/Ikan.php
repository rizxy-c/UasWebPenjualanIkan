<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    protected $table = "tb_ikan";
    protected $primaryKey = "ikan_id";
    protected $fillable =['ikan_kode', 'ikan_nama', 'ikan_jenis', 'ikan_harga'];
    use HasFactory;
}
