<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    public $timestamps = false; 
    protected $fillable = ['nama', 'id_kategori', 'deskripsi', 'harga', 'stok', 'gambar'];
    
    public function kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }
}
