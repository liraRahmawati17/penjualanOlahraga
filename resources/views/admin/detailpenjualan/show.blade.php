@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Detail</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Detail Penjualan</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Pelanggan</label>
                        <input type="text" name="" class="form-control" value="{{$detailpenjualan->pelanggan->nama}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" name="" class="form-control" value="{{$detailpenjualan->barang->nama_barang}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Qty</label>
                        <input type="number" name="qty" value="{{$detailpenjualan->qty}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" value="{{$detailpenjualan->harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Total</label>
                        <input type="number" name="total" value="{{$detailpenjualan->total}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Thumbnail</label>
                        <br>
                        <img src="{{ $detailpenjualan->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/detailpenjualan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
