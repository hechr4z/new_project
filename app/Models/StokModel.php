<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokModel extends Model
{
    use HasFactory;

    protected $table = 'stok_barang';
    protected $primaryKey = 'Kd_Barang';
    public $timestamps = false;
    protected $fillable = [
        'Nm_Barang', 'Sz_Barang', 'Hg_Barang', 'Kuantitas'
    ];
}
