<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    protected $table = 'detail_transaksi';
    public $timestamps = false; 
    protected $fillable = ['bukti_pembayaran'];
    
    public function transaksi(){
        return $this->belongsTo(Transaksi::class,'bukti_pembayaran');
    }
}
