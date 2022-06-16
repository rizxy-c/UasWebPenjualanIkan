<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = "jenis";

    protected $primaryKey = 'id_ikan';

    protected $fillable = ['nama_jenis'];
}