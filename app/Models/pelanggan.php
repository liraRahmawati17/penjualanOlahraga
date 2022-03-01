<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jk', 'alamat', 'email'];
    protected $visible = ['nama', 'jk', 'alamat', 'email'];
    public $timestamps = true;

    public function penjualan()
    {
        //Model 'wisatahor' bisa memiliki banyak data dari
        //model 'destinasi' melalui fk 'wisata_id'
        return $this->hasMany('App\Models\penjualan', 'pelanggan_id');
    }

    public function transaksis()
    {
        //Model 'wisatahor' bisa memiliki banyak data dari
        //model 'destinasi' melalui fk 'wisata_id'
        return $this->hasMany('App\Models\transaksis', 'pelanggan_id');
    }

}
