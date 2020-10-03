<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    public $timestamps = false; 
    protected $fillable = ['nama', 'id_pelanggan', 'bukti_pembayaran', 'tanggal', 'subtotal'];

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class,'id_pelanggan','id');
    }

    public function detailTransaksi(){
        return $this->hasMany(TransaksiDetail::class,'id_transaksi','id');
    }
}
