<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['pelanggan_id', 'barang_id', 'detail_id', 'metode', 'tgl_bayar'];
    protected $visible = ['pelanggan_id', 'barang_id', 'detail_id', 'metode', 'tgl_bayar'];
    public $timestamps = true;

    //membuat relasi one to many dengan model "wisata"
    public function pelanggan()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->belongsTo('App\Models\pelanggan', 'pelanggan_id');
    }
    public function barang()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->belongsTo('App\Models\barang', 'barang_id');
    }
    public function detail()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->hasMany('App\Models\detail', 'detail_id');
    }

}
