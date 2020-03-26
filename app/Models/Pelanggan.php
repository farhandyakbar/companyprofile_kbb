<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    public $timestamps = false; 
    protected $fillable = ['username', 'password', 'email', 'nama_lengkap', 'alamat', 'no_telp'];
}
