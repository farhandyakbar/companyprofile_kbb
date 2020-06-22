<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangDetail extends Model
{
    protected $table = 'barang_detail';
    public $timestamps = false; 
    protected $fillable = ['id_barang', 'gambar'];
    
    public function barang(){
        return $this->belongsTo(Barang::class,'id_barang','id');
    }
}
