<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    public $timestamps = false; 
    protected $fillable = ['nama', 'kategori', 'deskripsi', 'harga', 'stok', 'gambar'];
}
