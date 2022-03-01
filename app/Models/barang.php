<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'harga', 'stok', 'suplier_id', 'cover'];
    protected $visible = ['nama_barang', 'harga', 'stok', 'suplier_id', 'cover'];
    public $timestamps = true;

    //membuat relasi one to many dengan model "wisata"
    public function penjualan()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->hasMany('App\Models\penjualan', 'barang_id');
    }
    public function detailPenjualan()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->hasMany('App\Models\detailPenjualan', 'barang_id');
    }
    public function suplier()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->belongsTo('App\Models\suplier', 'suplier_id');
    }
    public function transaksi()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->hasMany('App\Models\transaksi', 'barang_id');
    }
    public function image()
    {
        if ($this->cover && file_exists(public_path('images/barang/' . $this->cover))) {
            return asset('images/barang/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/barang/' . $this->cover))) {
            return unlink(public_path('images/barang/' . $this->cover));
        }

    }
}
