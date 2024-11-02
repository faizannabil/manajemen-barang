<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    //
    protected $table='barang';
    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'stock',
        'status',
        'harga_satuan',
       ];
}
